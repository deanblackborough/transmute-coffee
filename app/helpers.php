<?php

declare(strict_types=1);

define('ROOT', dirname(__DIR__));

/** A config file from config/, e.g. config('site') or config('app/version'). */
function config(string $name): array
{
    static $loaded = [];

    return $loaded[$name] ??= require ROOT . "/config/{$name}.php";
}

/** Escape for HTML text and attribute values. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Render resources/views/{name}.php with $vars in scope and return the HTML. */
function view(string $name, array $vars = []): string
{
    return (static function (string $__file, array $__vars): string {
        extract($__vars, EXTR_SKIP);
        ob_start();
        require $__file;

        return (string) ob_get_clean();
    })(ROOT . "/resources/views/{$name}.php", $vars);
}

/** Absolute URL on the live site, whatever host is serving the page. */
function url(string $path = '/'): string
{
    return rtrim(config('site')['url'], '/') . $path;
}

function css_path(): string
{
    return '/css/' . config('app/version')['css'] . '/app.css';
}

/** "2026-09-30" or an ISO timestamp as "30 Sep 2026". */
function format_date(string $iso): string
{
    return (new DateTimeImmutable($iso))->format('j M Y');
}

/** "Mar 2019", for start dates where the day means nothing. */
function format_month(string $iso): string
{
    return (new DateTimeImmutable($iso))->format('M Y');
}

/**
 * When a project started, for the sections that show it (the archive doesn't). A "started" date on the
 * project wins, otherwise it is the GitHub repo creation date, which is wrong for anything that began
 * life elsewhere or has no repo.
 */
function project_started(array $p): ?string
{
    if (!(config('sections')[$p['section']]['show_started'] ?? false)) {
        return null;
    }

    return $p['started'] ?? $p['stats']['created'] ?? null;
}

/** Google Analytics is skipped on local hosts so development doesn't pollute the numbers. */
function analytics_id(): ?string
{
    $id = config('site')['analytics'] ?? '';
    $host = strtolower(explode(':', $_SERVER['HTTP_HOST'] ?? '')[0]);

    if ($id === '' || preg_match('/^(localhost|127\.|.*\.(local|test)$)/', $host) === 1) {
        return null;
    }

    return $id;
}

/** Releases, stars and licences written by bin/releases, keyed by "owner/name". */
function repo_stats(): array
{
    static $stats = null;

    if ($stats === null) {
        $file = ROOT . '/data/releases.json';
        $json = is_file($file) ? json_decode((string) file_get_contents($file), true) : null;
        $stats = is_array($json['repos'] ?? null) ? $json['repos'] : [];
    }

    return $stats;
}

/** Every project from config/projects.php, with its GitHub stats under 'stats'. */
function projects(): array
{
    $stats = repo_stats();

    return array_map(
        static fn (array $project): array => $project + ['stats' => $stats[$project['repo'] ?? ''] ?? []],
        config('projects'),
    );
}

/** Projects marked featured, in the order they are listed. */
function featured_projects(array $projects): array
{
    return array_values(array_filter($projects, static fn (array $p): bool => !empty($p['featured'])));
}

/** The sections from config/sections.php, each with its (non-featured) projects. */
function project_groups(array $projects): array
{
    $groups = [];

    foreach (config('sections') as $id => $section) {
        $groups[] = $section + [
            'id' => $id,
            'projects' => array_values(array_filter(
                $projects,
                static fn (array $p): bool => $p['section'] === $id && empty($p['featured']),
            )),
        ];
    }

    return $groups;
}

/** Inline SVG icons (Heroicons and Simple Icons paths), decorative so hidden from assistive tech. */
function icon(string $name, string $class = 'size-4'): string
{
    $class = e($class);

    return match ($name) {
        'github' => '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="' . $class . '">'
            . '<path d="M12 .5a11.5 11.5 0 0 0-3.64 22.41c.58.1.79-.25.79-.56v-2c-3.2.7-3.88-1.37-3.88-1.37-.52-1.33-1.28-1.69-1.28-1.69-1.04-.71.08-.7.08-.7 1.16.08 1.77 1.19 1.77 1.19 1.03 1.77 2.7 1.26 3.36.96.1-.75.4-1.26.73-1.55-2.55-.29-5.24-1.28-5.24-5.68 0-1.26.45-2.28 1.18-3.09-.12-.29-.51-1.46.11-3.05 0 0 .97-.31 3.17 1.18a11 11 0 0 1 5.78 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.18 1.83 1.18 3.09 0 4.41-2.69 5.38-5.25 5.67.41.36.78 1.06.78 2.14v3.17c0 .31.21.67.8.56A11.5 11.5 0 0 0 12 .5Z"/></svg>',
        'arrow' => '<svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="' . $class . '">'
            . '<path d="M6 14 14 6M7 6h7v7"/></svg>',
        'star' => '<svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="' . $class . '">'
            . '<path d="m10 1.6 2.6 5.3 5.8.85-4.2 4.1 1 5.8L10 14.9 4.8 17.65l1-5.8-4.2-4.1 5.8-.85L10 1.6Z"/></svg>',
        'tag' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="' . $class . '">'
            . '<path d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"/>'
            . '<path d="M6 6h.008v.008H6V6Z"/></svg>',
        'chevron' => '<svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="' . $class . '">'
            . '<path d="m5 8 5 5 5-5"/></svg>',
        'crescent' => '<svg viewBox="0 0 24 24" aria-hidden="true" class="' . $class . '">'
            . '<path fill="currentColor" d="M20.2 14.6A8.6 8.6 0 0 1 9.4 3.8a.6.6 0 0 0-.8-.7A9.6 9.6 0 1 0 20.9 15.4a.6.6 0 0 0-.7-.8Z"/></svg>',
    };
}

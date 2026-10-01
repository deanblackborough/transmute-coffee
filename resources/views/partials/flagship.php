<?php
/**
 * A major project, shown much larger than everything else.
 *
 * @var array $p
 * @var bool  $mirror  put the facts on the left, so a stack of these has some rhythm
 */
$mirror ??= false;
$stats = $p['stats'] ?? [];

$facts = ['Built with' => implode(', ', $p['tags'])];

if (!empty($stats['version'])) {
    $facts['Latest release'] = $stats['version'];

    if (!empty($stats['released'])) {
        $facts['Released'] = format_date($stats['released']);
    }
} elseif (!empty($stats['pushed'])) {
    $facts['Last updated'] = format_date($stats['pushed']);
}

if (!empty($stats['stars'])) {
    $facts['GitHub stars'] = (string) $stats['stars'];
}

if (!empty($stats['license'])) {
    $facts['Licence'] = $stats['license'];
}
?>
<article id="<?= e($p['slug']) ?>" class="relative scroll-mt-8 overflow-hidden rounded-3xl border border-gold-400/25 bg-linear-to-br from-night-800 via-night-800 to-night-700/70 p-7 sm:p-10 lg:p-14">
<?php foreach ($p['aliases'] ?? [] as $alias): ?>
    <span id="<?= e($alias) ?>" class="absolute"></span>
<?php endforeach ?>
    <div class="pointer-events-none absolute -top-28 size-96 rounded-full bg-gold-400/10 blur-3xl <?= $mirror ? '-left-24' : '-right-24' ?>"></div>
    <div class="relative grid gap-10 lg:items-end <?= $mirror ? 'lg:grid-cols-[1fr_1.7fr]' : 'lg:grid-cols-[1.7fr_1fr]' ?>">
        <div class="<?= $mirror ? 'lg:order-2' : '' ?>">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                <p class="font-mono text-xs uppercase tracking-widest text-gold-400">Major project &middot; <?= e($p['kind']) ?></p>
                <div class="flex flex-wrap items-center gap-1.5"><?= view('partials/badges', ['p' => $p]) ?></div>
            </div>
            <h3 class="mt-5 font-display text-4xl leading-[1.05] text-moon-50 sm:text-5xl lg:text-6xl"><?= e($p['name']) ?></h3>
            <p class="mt-5 max-w-xl text-lg leading-relaxed sm:text-xl"><?= e($p['blurb']) ?></p>
            <div class="mt-8 flex flex-wrap gap-2.5"><?= view('partials/links', ['p' => $p, 'size' => 'lg']) ?></div>
        </div>
        <dl class="grid grid-cols-2 gap-x-6 gap-y-5 font-mono text-sm lg:grid-cols-1 <?= $mirror ? 'lg:order-1 lg:border-r lg:border-white/10 lg:pr-10' : 'lg:border-l lg:border-white/10 lg:pl-10' ?>">
<?php foreach ($facts as $label => $value): ?>
            <div class="<?= $label === 'Built with' ? 'col-span-2 lg:col-span-1' : '' ?>">
                <dt class="text-xs uppercase tracking-widest text-moon-400"><?= e($label) ?></dt>
                <dd class="mt-1 text-moon-50"><?= e($value) ?></dd>
            </div>
<?php endforeach ?>
        </dl>
    </div>
</article>

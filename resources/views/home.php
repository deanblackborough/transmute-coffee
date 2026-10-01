<?php
/**
 * @var array $site
 * @var array $featured  the major projects
 * @var array $groups    sections from config/sections.php, each with its projects
 */
$jump = [['major-projects', 'Major projects']];

foreach ($groups as $group) {
    $jump[] = [$group['id'], $group['title']];
}
?>
<a href="#projects" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded-full focus:bg-gold-400 focus:px-4 focus:py-2 focus:font-semibold focus:text-night-950">Skip to the projects</a>

<header class="relative isolate overflow-hidden">
    <div class="starfield absolute inset-0 -z-20" aria-hidden="true"></div>
    <div class="absolute inset-0 -z-10 bg-linear-to-b from-night-950/0 via-night-950/0 to-night-950"></div>
    <img src="/img/moon.svg" alt="" width="600" height="600" class="pointer-events-none absolute -right-[14%] top-[2%] -z-10 h-auto w-[min(110vw,760px)] max-w-none opacity-30 lg:opacity-100">

    <nav class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-6 py-6" aria-label="Main">
        <a href="/" class="flex items-center gap-2.5 whitespace-nowrap font-display text-lg text-moon-50 sm:text-xl"><?= icon('crescent', 'size-6 text-gold-400') ?>Transmute Coffee</a>
        <div class="flex items-center gap-1 text-sm">
            <a href="#projects" class="hidden rounded-full px-3 py-1.5 transition hover:text-gold-300 sm:block">Projects</a>
            <a href="<?= e($site['blog']) ?>" class="rounded-full px-3 py-1.5 transition hover:text-gold-300">Blog</a>
            <a href="<?= e($site['github']) ?>" class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 transition hover:text-gold-300" aria-label="Dean Blackborough on GitHub"><?= icon('github') ?><span class="hidden sm:inline">GitHub</span></a>
        </div>
    </nav>

    <div class="mx-auto max-w-6xl px-6 pb-28 pt-20 sm:pt-28 lg:pb-40 lg:pt-36">
        <p class="font-mono text-xs uppercase tracking-[0.18em] text-gold-400 sm:tracking-[0.25em]">Software by <?= e($site['author']) ?></p>
        <h1 class="mt-6 font-display text-6xl leading-[0.95] tracking-tight text-moon-50 sm:text-7xl lg:text-8xl">Transmute<br><span class="italic text-gold-300">Coffee</span></h1>
        <p class="mt-8 max-w-xl text-balance text-lg leading-relaxed sm:text-xl">Open source PHP libraries, Laravel apps, games and half-finished experiments, led by the Costs to Expect API and Prune, a live 2D editor. Anything that costs money is tagged Commercial.</p>
        <div class="mt-10 flex flex-wrap items-center gap-3">
            <a href="#projects" class="inline-flex items-center gap-2 rounded-full bg-gold-400 px-6 py-3 font-semibold text-night-950 transition hover:bg-gold-300">Browse the projects</a>
            <a href="<?= e($site['blog']) ?>" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3 font-medium text-moon-50 transition hover:border-gold-400/60 hover:text-gold-300">Read the blog <?= icon('arrow') ?></a>
        </div>
        <nav class="mt-14 flex flex-wrap items-center gap-2" aria-label="Sections">
            <span class="mr-2 font-mono text-xs uppercase tracking-widest text-moon-400">Jump to</span>
<?php foreach ($jump as [$anchor, $label]): ?>
            <a href="#<?= e($anchor) ?>" class="rounded-full border border-white/12 px-3.5 py-1.5 text-sm text-moon-200 transition hover:border-gold-400/60 hover:text-gold-300"><?= e($label) ?></a>
<?php endforeach ?>
        </nav>
    </div>
</header>

<main id="projects" class="mx-auto max-w-6xl space-y-28 px-6 pb-28">
    <section id="major-projects" class="scroll-mt-8" aria-labelledby="major-projects-title">
        <?= view('partials/section-head', [
            'number' => 1,
            'id' => 'major-projects-title',
            'title' => 'Major projects',
            'blurb' => 'The two big ones: the open source API behind Costs to Expect, and Prune, a live 2D editor and runtime.',
        ]) ?>
        <div class="mt-10 space-y-6">
<?php foreach ($featured as $i => $project): ?>
            <?= view('partials/flagship', ['p' => $project, 'mirror' => $i % 2 === 1]) ?>
<?php endforeach ?>
        </div>
    </section>

<?php foreach ($groups as $n => $group): ?>
    <section id="<?= e($group['id']) ?>" class="scroll-mt-8" aria-labelledby="<?= e($group['id']) ?>-title">
        <?= view('partials/section-head', [
            'number' => $n + 2,
            'id' => $group['id'] . '-title',
            'title' => $group['title'],
            'blurb' => $group['blurb'],
            'link' => $group['link'] ?? null,
        ]) ?>
<?php if ($group['layout'] === 'cards'): ?>
<?php
        // Two columns, or three on large screens once there are more than four. The three column version
        // is a six column grid so a short last row stretches to fill the width instead of leaving a gap.
        $count = count($group['projects']);
        $three = $count > 4;
?>
        <div class="mt-10 grid gap-5 md:grid-cols-2 <?= $three ? 'lg:grid-cols-6' : '' ?>">
<?php foreach ($group['projects'] as $i => $project): ?>
<?php
            $last = $i === $count - 1;
            $span = match (true) {
                $three && $count % 3 === 1 && $last => 'lg:col-span-6',
                $three && $count % 3 === 2 && $i >= $count - 2 => 'lg:col-span-3',
                $three => 'lg:col-span-2',
                default => '',
            };

            if ($last && $count % 2 === 1) {
                $span .= $three ? ' md:max-lg:col-span-2' : ' md:col-span-2';
            }
?>
            <?= view('partials/card', ['p' => $project, 'class' => $span]) ?>
<?php endforeach ?>
        </div>
<?php elseif ($group['layout'] === 'rows'): ?>
        <ul class="mt-8 border-b border-white/10">
<?php foreach ($group['projects'] as $project): ?>
            <?= view('partials/row', ['p' => $project]) ?>
<?php endforeach ?>
        </ul>
<?php else: ?>
        <details class="group mt-8 border-y border-white/10">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 py-5 text-moon-50 marker:hidden [&::-webkit-details-marker]:hidden">
                <span class="font-display text-xl">Show <?= count($group['projects']) ?> archived projects</span>
                <?= icon('chevron', 'size-5 text-gold-400 transition group-open:rotate-180') ?>
            </summary>
            <ul>
<?php foreach ($group['projects'] as $project): ?>
                <?= view('partials/row', ['p' => $project]) ?>
<?php endforeach ?>
            </ul>
        </details>
<?php endif ?>
    </section>

<?php endforeach ?>
</main>

<footer class="border-t border-white/10">
    <div class="mx-auto grid max-w-6xl gap-6 px-6 py-12 text-sm text-moon-400 md:grid-cols-2">
        <p>&copy; Dean Blackborough or G3D Development. Code is MIT licensed unless a project&rsquo;s README says otherwise.</p>
        <p class="flex flex-wrap gap-x-5 gap-y-2 md:justify-end">
            <a class="hover:text-gold-300" href="<?= e($site['blog']) ?>">Blog</a>
            <a class="hover:text-gold-300" href="<?= e($site['github']) ?>">GitHub profile</a>
            <a class="hover:text-gold-300" href="<?= e($site['packagist']) ?>">Packagist profile</a>
        </p>
    </div>
</footer>

<?php
/**
 * @var array       $p
 * @var string|null $class  extra layout classes from the grid
 */
$class ??= '';
$meta = trim(view('partials/meta', ['p' => $p]));
?>
<article id="<?= e($p['slug']) ?>" class="flex scroll-mt-8 flex-col rounded-2xl border bg-night-800/70 p-6 transition hover:border-gold-400/40 <?= !empty($p['commercial']) ? 'border-gold-400/30' : 'border-white/10' ?> <?= e($class) ?>">
<?php foreach ($p['aliases'] ?? [] as $alias): ?>
    <span id="<?= e($alias) ?>" class="absolute"></span>
<?php endforeach ?>
    <div class="flex flex-wrap items-center justify-between gap-x-3 gap-y-2">
        <p class="font-mono text-xs uppercase tracking-widest text-moon-400"><?= e($p['kind']) ?></p>
        <div class="flex flex-wrap items-center gap-1.5"><?= view('partials/badges', ['p' => $p]) ?></div>
    </div>
    <h3 class="mt-4 font-display text-2xl text-moon-50"><?= e($p['name']) ?></h3>
    <p class="mt-2 text-[15px] leading-relaxed"><?= e($p['blurb']) ?></p>
    <ul class="mt-4 flex flex-wrap gap-1.5 font-mono text-xs text-moon-400">
<?php foreach ($p['tags'] as $tag): ?>
        <li class="rounded-md bg-white/5 px-2 py-0.5"><?= e($tag) ?></li>
<?php endforeach ?>
    </ul>
    <div class="mt-auto flex flex-wrap items-center gap-2 pt-6"><?= view('partials/links', ['p' => $p]) ?></div>
<?php if ($meta !== ''): ?>
    <p class="mt-4 flex flex-wrap items-center gap-x-4 gap-y-1 font-mono text-xs text-moon-400"><?= $meta ?></p>
<?php endif ?>
</article>

<?php
/**
 * Compact one-line project, for the libraries and the archive.
 *
 * @var array $p
 */
$meta = trim(view('partials/meta', ['p' => $p]));
?>
<li id="<?= e($p['slug']) ?>" class="scroll-mt-8 grid gap-3 border-t border-white/10 py-5 md:grid-cols-[minmax(0,1.05fr)_minmax(0,2fr)_minmax(0,1.15fr)] md:items-center md:gap-8">
<?php foreach ($p['aliases'] ?? [] as $alias): ?>
    <span id="<?= e($alias) ?>" class="absolute"></span>
<?php endforeach ?>
    <div class="flex flex-col items-start gap-2">
        <h3 class="font-display text-xl text-moon-50"><?= e($p['name']) ?></h3>
        <div class="flex flex-wrap items-center gap-1.5"><?= view('partials/badges', ['p' => $p]) ?></div>
    </div>
    <div>
        <p class="text-[15px] leading-relaxed"><?= e($p['blurb']) ?></p>
<?php if ($meta !== ''): ?>
        <p class="mt-2 flex flex-wrap items-center gap-x-4 gap-y-1 font-mono text-xs text-moon-400"><?= $meta ?></p>
<?php endif ?>
    </div>
    <div class="flex flex-wrap items-center gap-x-2 gap-y-2 md:justify-end"><?= view('partials/links', ['p' => $p, 'size' => 'sm', 'calm' => true]) ?></div>
</li>

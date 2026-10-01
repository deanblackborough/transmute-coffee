<?php
/**
 * @var int        $number
 * @var string     $id     the heading's id
 * @var string     $title
 * @var string     $blurb
 * @var array|null $link   [label, url]
 */
$link ??= null;
?>
<div class="flex flex-wrap items-end justify-between gap-6">
    <div>
        <p class="font-mono text-xs uppercase tracking-[0.2em] text-gold-400"><?= sprintf('%02d', $number) ?></p>
        <h2 id="<?= e($id) ?>" class="mt-2 font-display text-4xl text-moon-50"><?= e($title) ?></h2>
        <p class="mt-3 max-w-2xl text-moon-200"><?= e($blurb) ?></p>
    </div>
<?php if ($link): ?>
    <a href="<?= e($link[1]) ?>" class="inline-flex items-center gap-1.5 text-sm text-gold-300 hover:text-gold-400"><?= e($link[0]) ?> <?= icon('arrow', 'size-3.5') ?></a>
<?php endif ?>
</div>

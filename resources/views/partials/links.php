<?php
/**
 * A project's link buttons. The first link is the main (gold) button unless $calm.
 * The project name is added as visually hidden text so every link reads and ranks as "GitHub: Prune",
 * not just "GitHub".
 *
 * @var array  $p
 * @var string $size  sm | md | lg
 * @var bool   $calm  outlined buttons only
 */
$size ??= 'md';
$calm ??= false;
$sizes = ['sm' => 'px-3 py-1 text-[13px]', 'md' => 'px-3.5 py-1.5 text-sm', 'lg' => 'px-5 py-2.5 text-[15px]'];
?>
<?php foreach ($p['links'] as $i => [$label, $href]): ?>
<a href="<?= e($href) ?>" class="inline-flex items-center gap-1.5 rounded-full <?= $sizes[$size] ?> transition <?= $i === 0 && !$calm
    ? 'bg-gold-400 font-semibold text-night-950 hover:bg-gold-300'
    : 'border border-white/15 text-moon-50 hover:border-gold-400/60 hover:text-gold-300' ?>"><?= icon($label === 'GitHub' ? 'github' : 'arrow') ?><?= e($label) ?><span class="sr-only">: <?= e($p['name']) ?></span></a>
<?php endforeach ?>

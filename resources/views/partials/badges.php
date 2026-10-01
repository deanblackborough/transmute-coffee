<?php
/**
 * Status pill, plus the Commercial tag for anything that costs money.
 *
 * @var array $p
 */
$styles = [
    'active' => ['pill' => 'bg-emerald-400/10 text-emerald-300 ring-emerald-400/25', 'dot' => 'bg-emerald-400', 'label' => 'Active'],
    'experimental' => ['pill' => 'bg-violet-400/10 text-violet-300 ring-violet-400/25', 'dot' => 'bg-violet-300', 'label' => 'Experimental'],
    'legacy' => ['pill' => 'bg-white/5 text-moon-400 ring-white/10', 'dot' => 'bg-moon-400/70', 'label' => 'Legacy'],
    'archived' => ['pill' => 'bg-white/5 text-moon-400 ring-white/10', 'dot' => 'bg-moon-400/70', 'label' => 'Archived'],
];
$status = $styles[$p['status']];
?>
<?php if (!empty($p['commercial'])): ?>
<span class="inline-flex items-center gap-1.5 rounded-full bg-gold-400/10 px-2.5 py-1 text-xs font-medium text-gold-300 ring-1 ring-gold-400/40" title="This one costs money"><?= icon('tag', 'size-3.5') ?>Commercial</span>
<?php endif ?>
<span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-medium ring-1 <?= $status['pill'] ?>"><span class="size-1.5 rounded-full <?= $status['dot'] ?>"></span><?= $status['label'] ?></span>

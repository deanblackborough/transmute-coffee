<?php
/**
 * The small release / activity / stars line under a card. Prints nothing when there is nothing to say.
 *
 * @var array $p
 */
$stats = $p['stats'] ?? [];
?>
<?php if (!empty($stats['version'])): ?>
<span><?= e($stats['version']) ?><?php if (!empty($stats['released'])): ?><span class="text-moon-400/60"> / </span><?= e(format_date($stats['released'])) ?><?php endif ?></span>
<?php elseif (!empty($stats['pushed'])): ?>
<span>Updated <?= e(format_date($stats['pushed'])) ?></span>
<?php endif ?>
<?php if (!empty($stats['stars'])): ?>
<span class="inline-flex items-center gap-1"><?= icon('star', 'size-3.5') ?><?= (int) $stats['stars'] ?><span class="sr-only"> GitHub stars</span></span>
<?php endif ?>

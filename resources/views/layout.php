<?php
/**
 * @var array       $site
 * @var string      $title
 * @var string      $description
 * @var string      $content
 * @var string|null $canonical  set on pages that should be indexed
 * @var bool|null   $noindex
 * @var array|null  $schema     JSON-LD
 */
$canonical ??= null;
$noindex ??= false;
$schema ??= null;
$analytics = analytics_id();
?>
<!doctype html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
<?php if ($noindex): ?>
    <meta name="robots" content="noindex">
<?php endif ?>
<?php if ($canonical): ?>
    <link rel="canonical" href="<?= e($canonical) ?>">
<?php endif ?>
    <meta name="author" content="<?= e($site['author']) ?>">
    <meta name="theme-color" content="#060913">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
<?php if ($canonical): ?>
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($site['name']) ?>">
    <meta property="og:locale" content="en_GB">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($description) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e(url($site['image'])) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= e($site['image_alt']) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($title) ?>">
    <meta name="twitter:description" content="<?= e($description) ?>">
    <meta name="twitter:image" content="<?= e(url($site['image'])) ?>">
    <meta name="twitter:image:alt" content="<?= e($site['image_alt']) ?>">
<?php endif ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;1,9..144,400&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(css_path()) ?>">
<?php if ($schema): ?>
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_THROW_ON_ERROR) ?></script>
<?php endif ?>
<?php if ($analytics): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($analytics) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= e($analytics) ?>');
    </script>
<?php endif ?>
</head>
<body>
<?= $content ?>
</body>
</html>

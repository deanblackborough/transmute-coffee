<?php

declare(strict_types=1);

require dirname(__DIR__) . '/app/helpers.php';
require dirname(__DIR__) . '/app/seo.php';

$path = rawurldecode((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));

// /index.php is the same page as /
if ($path === '/index.php') {
    header('Location: /', true, 301);

    return;
}

$site = config('site');

if ($path === '/') {
    $projects = projects();
    $featured = featured_projects($projects);
    $groups = project_groups($projects);

    echo view('layout', [
        'site' => $site,
        'title' => $site['title'],
        'description' => $site['description'],
        'canonical' => url('/'),
        'schema' => structured_data($site, $featured, $groups),
        'content' => view('home', ['site' => $site, 'featured' => $featured, 'groups' => $groups]),
    ]);

    return;
}

// Anything else is a real 404, not the home page with a 200
http_response_code(404);

echo view('layout', [
    'site' => $site,
    'title' => 'Page not found - ' . $site['name'],
    'description' => 'That page does not exist.',
    'noindex' => true,
    'content' => view('not-found', ['site' => $site]),
]);

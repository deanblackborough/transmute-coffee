<?php

declare(strict_types=1);

/**
 * schema.org JSON-LD for the home page: the website, its author, and the list of projects.
 * Everything here is also visible on the page, which is what search engines want.
 */
function structured_data(array $site, array $featured, array $groups): array
{
    $origin = rtrim($site['url'], '/');
    $person = ['@id' => $origin . '/#author'];
    $projects = $featured;

    foreach ($groups as $group) {
        array_push($projects, ...$group['projects']);
    }

    $items = [];

    foreach ($projects as $index => $p) {
        $stats = $p['stats'] ?? [];
        $item = [
            '@type' => isset($p['repo']) ? 'SoftwareSourceCode' : 'SoftwareApplication',
            'name' => $p['name'],
            'description' => $p['blurb'],
            'url' => $p['links'][0][1],
            'keywords' => implode(', ', $p['tags']),
            'author' => $person,
        ];

        if (isset($p['repo'])) {
            $item['codeRepository'] = 'https://github.com/' . $p['repo'];
        }

        if (!empty($stats['license'])) {
            $item['license'] = 'https://spdx.org/licenses/' . $stats['license'];
        }

        if (!empty($stats['version'])) {
            $item['version'] = $stats['version'];
        }

        $items[] = ['@type' => 'ListItem', 'position' => $index + 1, 'item' => $item];
    }

    return [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'WebSite',
                '@id' => $origin . '/#website',
                'url' => $origin . '/',
                'name' => $site['name'],
                'description' => $site['description'],
                'inLanguage' => 'en-GB',
                'publisher' => $person,
            ],
            [
                '@type' => 'Person',
                '@id' => $person['@id'],
                'name' => $site['author'],
                'url' => $site['blog'],
                'sameAs' => [$site['github'], $site['packagist']],
            ],
            [
                '@type' => 'CollectionPage',
                '@id' => $origin . '/#webpage',
                'url' => $origin . '/',
                'name' => $site['title'],
                'description' => $site['description'],
                'inLanguage' => 'en-GB',
                'isPartOf' => ['@id' => $origin . '/#website'],
                'mainEntity' => ['@id' => $origin . '/#projects'],
            ],
            [
                '@type' => 'ItemList',
                '@id' => $origin . '/#projects',
                'name' => 'Projects by ' . $site['author'],
                'numberOfItems' => count($items),
                'itemListElement' => $items,
            ],
        ],
    ];
}

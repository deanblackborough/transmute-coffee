<?php

// One entry per project, in display order within its section.
//
//   slug        becomes the #anchor and must be unique
//   section     a key from sections.php
//   featured    true = shown large under "Major projects" instead of in its section
//   status      active | experimental | legacy | archived
//   commercial  true = shows the "Commercial" tag, for anything that costs money
//   repo        GitHub "owner/name", stars, licence and latest release come from data/releases.json (php bin/releases)
//   links       [label, url] pairs, the first is the main button. "GitHub" gets the GitHub icon
//   aliases     anchors from the previous site, so links to them keep working

$me = 'https://github.com/deanblackborough/';
$cte = 'https://github.com/costs-to-expect/';
$dlayer = 'https://github.com/dlayer/';

return [
    // ------------------------------------------------------------------------------------ Costs to Expect
    [
        'slug' => 'costs-to-expect-api',
        'section' => 'costs-to-expect',
        'featured' => true,
        'name' => 'Costs to Expect API',
        'kind' => 'API',
        'status' => 'active',
        'blurb' => 'A flexible open source REST API, the backbone of the Costs to Expect service. Designed to '
            . 'track expenses, it has grown to track almost anything. Everything is configurable, from data types '
            . 'and validation to limits, and it is built to be multilingual and to scale. It drives the apps, the '
            . 'website and the Yahtzee and Yatzy game scorers.',
        'tags' => ['PHP', 'Laravel', 'REST'],
        'repo' => 'costs-to-expect/api',
        'links' => [
            ['API', 'https://api.costs-to-expect.com'],
            ['GitHub', $cte . 'api'],
            ['Changelog', $cte . 'api/blob/master/CHANGELOG.md'],
        ],
    ],
    [
        'slug' => 'costs-to-expect-budget',
        'section' => 'costs-to-expect',
        'name' => 'Budget',
        'kind' => 'App',
        'status' => 'active',
        'blurb' => 'A free, open source, planning-first budgeting app. Manage income, expenses and savings, '
            . 'schedule items monthly or annually, and see your budget projection update instantly. Includes a '
            . 'demo mode, seven currencies and is powered by the Costs to Expect API.',
        'tags' => ['Laravel', 'Costs to Expect API'],
        'repo' => 'costs-to-expect/budget',
        'links' => [
            ['App', 'https://budget.costs-to-expect.com'],
            ['GitHub', $cte . 'budget'],
        ],
    ],
    [
        'slug' => 'costs-to-expect-budget-pro',
        'section' => 'costs-to-expect',
        'name' => 'Budget Pro',
        'started' => '2023-05',
        'kind' => 'App',
        'status' => 'active',
        'commercial' => true,
        'blurb' => 'Plan your finances before they happen. A planning-first budgeting app for people who want '
            . 'control before they spend, with multi-month forecasting, multiple budget scenarios, savings goals, '
            . 'bulk editing and a full change history. £89.99 lifetime access with a 30-day free trial, no '
            . 'subscription.',
        'tags' => ['Laravel', 'Costs to Expect API'],
        'links' => [
            ['App', 'https://budget-pro.costs-to-expect.com/'],
        ],
    ],
    [
        'slug' => 'costs-to-expect-cashflow',
        'section' => 'costs-to-expect',
        'name' => 'Cashflow',
        'kind' => 'App',
        'status' => 'active',
        'blurb' => 'A lightweight Laravel app for tracking cashflow against the Costs to Expect API, with '
            . 'percentage splitting, recurring expenses and reporting periods. Alpha.',
        'tags' => ['Laravel', 'Costs to Expect API'],
        'repo' => 'costs-to-expect/cashflow',
        'links' => [
            ['GitHub', $cte . 'cashflow'],
        ],
    ],
    [
        'slug' => 'costs-to-expect-website',
        'section' => 'costs-to-expect',
        'name' => 'The Website',
        'kind' => 'Website',
        'status' => 'active',
        'blurb' => 'How much does it cost to raise a child in the UK? A long-term project tracking what it '
            . 'costs to raise our children to adulthood, 18.',
        'tags' => ['Laravel', 'Costs to Expect API'],
        'repo' => 'costs-to-expect/website',
        'links' => [
            ['Website', 'https://www.costs-to-expect.com'],
            ['GitHub', $cte . 'website'],
            ['Changelog', 'https://www.costs-to-expect.com/changelog'],
        ],
    ],

    // ------------------------------------------------------------------------------------ Games & experiments
    [
        'slug' => 'prune',
        'section' => 'games',
        'featured' => true,
        'name' => 'Prune',
        'kind' => 'Editor + runtime',
        'status' => 'experimental',
        'blurb' => 'A C++23 live 2D editor and runtime prototype where the editor stays part of the game. '
            . 'Play and build in the same loop, with SDL2, Dear ImGui and yaml-cpp.',
        'tags' => ['C++23', 'SDL2', 'Dear ImGui', 'yaml-cpp'],
        'repo' => 'deanblackborough/Prune',
        'links' => [
            ['GitHub', $me . 'Prune'],
        ],
    ],
    [
        'slug' => 'yahtzee',
        'section' => 'games',
        'name' => 'Yahtzee Game Scorer',
        'kind' => 'App',
        'status' => 'active',
        'blurb' => 'Game scoring for Yahtzee, powered by the Costs to Expect API. Proof the API isn’t just '
            . 'for expenses.',
        'tags' => ['Laravel', 'Costs to Expect API'],
        'repo' => 'costs-to-expect/yahtzee',
        'links' => [
            ['App', 'https://yahtzee.game-scorer.com'],
            ['GitHub', $cte . 'yahtzee'],
        ],
    ],
    [
        'slug' => 'yatzy',
        'section' => 'games',
        'name' => 'Yatzy Game Scorer',
        'kind' => 'App',
        'status' => 'active',
        'blurb' => 'Game scoring for Yatzy, also powered by the Costs to Expect API.',
        'tags' => ['Laravel', 'Costs to Expect API'],
        'repo' => 'costs-to-expect/yatzy',
        'links' => [
            ['App', 'https://yatzy.game-scorer.com'],
            ['GitHub', $cte . 'yatzy'],
        ],
    ],
    [
        'slug' => 'godot-platformer',
        'section' => 'games',
        'name' => 'Godot Platformer',
        'kind' => 'Starter kit',
        'status' => 'active',
        'blurb' => 'A work-in-progress platformer starter for Godot 4.4+, built as a testbed for learning '
            . 'the engine and a foundation for future games.',
        'tags' => ['GDScript', 'Godot 4'],
        'repo' => 'deanblackborough/godot-platformer',
        'links' => [
            ['GitHub', $me . 'godot-platformer'],
        ],
    ],
    [
        'slug' => 'gm-platformer',
        'section' => 'games',
        'name' => 'GameMaker Platformer',
        'kind' => 'Starter kit',
        'status' => 'active',
        'blurb' => 'A beginner-friendly platformer starter project for GameMaker Studio.',
        'tags' => ['GML', 'GameMaker'],
        'repo' => 'deanblackborough/gm-platformer',
        'links' => [
            ['GitHub', $me . 'gm-platformer'],
        ],
    ],
    [
        'slug' => 'maths-quiz',
        'section' => 'games',
        'name' => 'Maths Quiz',
        'kind' => 'App',
        'status' => 'legacy',
        'blurb' => 'Small maths quiz app that generates random short division and long multiplication '
            . 'questions for the kids.',
        'tags' => ['C++', 'Console'],
        'repo' => 'deanblackborough/MathsQuiz',
        'links' => [
            ['GitHub', $me . 'MathsQuiz'],
        ],
    ],

    // ------------------------------------------------------------------------------------ Libraries & tooling
    [
        'slug' => 'php-quill-renderer',
        'section' => 'libraries',
        'name' => 'PHP Quill Renderer',
        'kind' => 'Library',
        'status' => 'archived',
        'blurb' => 'Renders Quill insert deltas to HTML, Markdown and GitHub flavoured Markdown. '
            . '235k installs on Packagist. No longer maintained.',
        'tags' => ['PHP', 'Composer', 'QuillJS'],
        'repo' => 'deanblackborough/php-quill-renderer',
        'links' => [
            ['GitHub', $me . 'php-quill-renderer'],
            ['Packagist', 'https://packagist.org/packages/deanblackborough/php-quill-renderer'],
            ['Changelog', $me . 'php-quill-renderer/blob/master/CHANGELOG.md'],
        ],
        'aliases' => ['PHP-Quill-Renderer'],
    ],
    [
        'slug' => 'laravel-view-helpers',
        'section' => 'libraries',
        'name' => 'Laravel View Helpers',
        'kind' => 'Library',
        'status' => 'legacy',
        'blurb' => 'General and Bootstrap-specific view helpers for Laravel Blade templates. Starts with '
            . 'pagination.',
        'tags' => ['PHP', 'Laravel'],
        'repo' => 'deanblackborough/laravel-view-helpers',
        'links' => [
            ['GitHub', $me . 'laravel-view-helpers'],
            ['Changelog', $me . 'laravel-view-helpers/blob/master/CHANGELOG.md'],
        ],
        'aliases' => ['Laravel-view-helpers'],
    ],
    [
        'slug' => 'bootstrap-4-helpers',
        'section' => 'libraries',
        'name' => 'Bootstrap 4 Helpers',
        'kind' => 'Library',
        'status' => 'legacy',
        'blurb' => 'Standalone wrapper classes for the Bootstrap 4 view helpers in ZF3 View Helpers, usable '
            . 'in any PHP site.',
        'tags' => ['PHP', 'Bootstrap 4'],
        'repo' => 'deanblackborough/bootstrap-4-helpers',
        'links' => [
            ['GitHub', $me . 'bootstrap-4-helpers'],
        ],
        'aliases' => ['Bootstrap-4-helpers'],
    ],
    [
        'slug' => 'docker-quick-start',
        'section' => 'libraries',
        'name' => 'PHP/MySQL Docker Quick Start',
        'kind' => 'Starter',
        'status' => 'legacy',
        'blurb' => 'A starting point for a PHP/MySQL web app using Docker for local development. It echoes '
            . 'phpinfo() and nothing else.',
        'tags' => ['Docker', 'PHP'],
        'repo' => 'deanblackborough/docker-compose-quick-start',
        'links' => [
            ['GitHub', $me . 'docker-compose-quick-start'],
        ],
        'aliases' => ['Quick-start-for-a-PHP-MySQL-web-app'],
    ],
    [
        'slug' => 'random-grab-bag',
        'section' => 'libraries',
        'name' => 'Random Grab Bag',
        'kind' => 'Library',
        'status' => 'legacy',
        'blurb' => 'Utility classes that don’t deserve their own package: an image resizer and an Excel parser.',
        'tags' => ['PHP'],
        'repo' => 'deanblackborough/random-grab-bag',
        'links' => [
            ['GitHub', $me . 'random-grab-bag'],
        ],
        'aliases' => ['Random-Grab-Bag'],
    ],

    // ------------------------------------------------------------------------------------ Archive
    [
        'slug' => 'holiday-expenses',
        'section' => 'archive',
        'name' => 'Holiday Expenses',
        'kind' => 'App',
        'status' => 'archived',
        'blurb' => 'Small app that talks to the Costs to Expect API to track holiday expenses.',
        'tags' => ['PHP', 'Costs to Expect API'],
        'repo' => 'deanblackborough/holiday-expenses',
        'links' => [
            ['GitHub', $me . 'holiday-expenses'],
        ],
    ],
    [
        'slug' => 'cte-data-collector',
        'section' => 'archive',
        'name' => 'Costs to Expect Data Collector',
        'kind' => 'App',
        'status' => 'archived',
        'blurb' => 'The original web app for entering expenses into the Costs to Expect API.',
        'tags' => ['PHP', 'Costs to Expect API'],
        'repo' => 'deanblackborough/costs-to-expect-web-app',
        'links' => [
            ['GitHub', $me . 'costs-to-expect-web-app'],
        ],
        'aliases' => ['costs-to-expect-legacy'],
    ],
    [
        'slug' => 'zf3-view-helpers',
        'section' => 'archive',
        'name' => 'Zend Framework 3 View Helpers',
        'kind' => 'Library',
        'status' => 'archived',
        'blurb' => 'View helpers for Zend Framework 3, mainly Bootstrap 3 and 4 components.',
        'tags' => ['PHP', 'ZF3'],
        'repo' => 'deanblackborough/zf3-view-helpers',
        'links' => [
            ['GitHub', $me . 'zf3-view-helpers'],
        ],
        'aliases' => ['Zend-Framework-3-View-Helpers'],
    ],
    [
        'slug' => 'zf3-view-helpers-code-completion',
        'section' => 'archive',
        'name' => 'ZF3 View Helpers Code Completion',
        'kind' => 'Library',
        'status' => 'archived',
        'blurb' => 'IDE code completion for Zend Framework view helpers.',
        'tags' => ['PHP', 'ZF3'],
        'repo' => 'deanblackborough/zf3-view-helpers-code-completion',
        'links' => [
            ['GitHub', $me . 'zf3-view-helpers-code-completion'],
        ],
        'aliases' => ['Zend-Framework-3-View-Helpers-Code-Completion'],
    ],
    [
        'slug' => 'dlayer',
        'section' => 'archive',
        'name' => 'Dlayer',
        'kind' => 'App',
        'status' => 'archived',
        'blurb' => 'An open source responsive web development tool aimed at people with limited design or '
            . 'development experience.',
        'tags' => ['PHP', 'ZF1'],
        'repo' => 'dlayer/dlayer',
        'links' => [
            ['GitHub', $dlayer . 'dlayer'],
        ],
        'aliases' => ['Dlayer'],
    ],
    [
        'slug' => 'dlayer-vnext',
        'section' => 'archive',
        'name' => 'Dlayer vNext',
        'kind' => 'App',
        'status' => 'archived',
        'blurb' => 'The migration of Dlayer to Zend Framework 3. Never released.',
        'tags' => ['PHP', 'ZF3'],
        'repo' => 'dlayer/responsive-web-development',
        'links' => [
            ['GitHub', $dlayer . 'responsive-web-development'],
        ],
        'aliases' => ['Dlayer-v-Next'],
    ],
    [
        'slug' => 'dlayer-view-helpers',
        'section' => 'archive',
        'name' => 'Dlayer View Helpers',
        'kind' => 'Library',
        'status' => 'archived',
        'blurb' => 'Custom ZF3 view helpers built for Dlayer vNext, possibly useful elsewhere with minor changes.',
        'tags' => ['PHP', 'ZF3'],
        'repo' => 'dlayer/view-helpers',
        'links' => [
            ['GitHub', $dlayer . 'view-helpers'],
        ],
        'aliases' => ['Dlayer-View-helpers'],
    ],
    [
        'slug' => 'prune-2d',
        'section' => 'archive',
        'name' => 'Prune2D',
        'kind' => 'Engine',
        'status' => 'archived',
        'blurb' => 'An earlier attempt at a C++ 2D game engine. Superseded by Prune.',
        'tags' => ['C++'],
        'repo' => 'deanblackborough/Prune2D',
        'links' => [
            ['GitHub', $me . 'Prune2D'],
        ],
    ],
];

<?php

// The sections below the "Major projects" band, in page order. The array key is the section's #anchor.
//
// layout   cards     two or three column cards
//          rows      one compact row per project
//          collapsed rows, hidden behind a "show" disclosure

return [
    'costs-to-expect' => [
        'title' => 'Costs to Expect',
        'blurb' => 'An expense tracking and forecasting service with an open source API at its heart. '
            . 'The apps and sites below all run on the API above.',
        'layout' => 'cards',
        'link' => ['costs-to-expect.com', 'https://www.costs-to-expect.com'],
    ],
    'games' => [
        'title' => 'Games & experiments',
        'blurb' => 'Learning game development in public, a maths quiz for the kids, and game scorers '
            . 'that run on the Costs to Expect API.',
        'layout' => 'cards',
    ],
    'libraries' => [
        'title' => 'Libraries & tooling',
        'blurb' => 'Small PHP packages and starters I built for my own projects and shared along the way.',
        'layout' => 'rows',
    ],
    'archive' => [
        'title' => 'Archive',
        'blurb' => 'Older projects, kept online for reference. Zend Framework 3 and Dlayer live here.',
        'layout' => 'collapsed',
    ],
];

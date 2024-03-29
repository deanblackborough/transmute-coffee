<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transmute Coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="description" content="Open Source PHP packages by Dean Blackborough">
    <meta name="author" content="Dean Blackborough">
    <meta name="application-name" content="Transmute-coffee.com"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-starturl" content="https://www.transmute-coffee.com"/>
    <meta name="msapplication-tooltip" content="Transmute Coffee.com"/>
    <link href="/node_modules/bootstrap/dist/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/site.css" media="screen" rel="stylesheet" type="text/css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1EQSVTG76B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1EQSVTG76B');
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Transmute Coffee</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://api.costs-to-expect.com">Costs to Expect API</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://budget.costs-to-expect.com">Budget</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="php-quill-renderer.php">PHP Quill Renderer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.deanblackborough.com">Dean Blackborough.com</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/deanblackborough">GitHub</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding-top: 1rem;">
            <div class="jumbotron text-light">
                <h1 class="display-3">Transmute Coffee</h1>
                <p class="lead bg-dark">This site was set up to act as the home for all my Open Source PHP packages and
                    projects. All packages and projects are Copyright &copy; of Dean Blackborough unless stated
                    otherwise in the README on GitHub.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p class="lead">If you would like to contact about one of my projects please use the contact details
                listed on <a href="https://github.com/deanblackborough">GitHub</a> for the relevant project.</p>

            <p>This site will eventually have a page/section dedicated to each project, for now, please just follow
                the links to my <a href="https://github.com/deanblackborough">GitHub</a> profile.</p>

            <h2>Projects</h2>

            <p>Active development projects.</p>

            <div class="card-deck mb-4">
                <!--API-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/API</div>
                    <div class="card-body">
                        <h4 class="card-title" id="costs-to-expect-api">Costs to Expect: The API</a></h4>
                        <p class="card-text">Costs to Expect is a service that primarily focuses on providing tools for
                            tracking and forecasting expenses.</p>
                        <p class="card-text">The Open Source Restful API is the backbone of the service; it is available
                            under the MIT license and drives the app and website.</p>
                        <a href="https://github.com/costs-to-expect/api"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://api.costs-to-expect.com" class="btn btn-outline-secondary">API</a>
                        <a href="https://github.com/costs-to-expect/api/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v3.11.1<br/>
                            <strong>Release date:</strong> 13th June 2023
                        </small>
                    </div>
                </div>

                <!--Budget-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/Website</div>
                    <div class="card-body">
                        <h4 class="card-title" id="costs-to-expect-budget">Costs to Expect: Budget</a></h4>
                        <p class="card-text">A budgeting tool so easy to use, it’s child play!</p>
                        <p class="card-text">A free, open source budgeting tool powered by the Costs to Expect API.</p>
                        <a href="https://github.com/costs-to-expect/budget"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://budget.costs-to-expect.com"
                            class="btn btn-outline-secondary">App</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.11.2<br/>
                            <strong>Release date:</strong> 14th January 2023
                        </small>
                    </div>
                </div>
            </div>

            <div class="card-deck mb-4">
                <!--Expense-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/Website</div>
                    <div class="card-body">
                        <h4 class="card-title" id="costs-to-expect-budget-pro">Costs to Expect: Budget Pro</a></h4>
                        <p class="card-text">Powerful budgeting tool, the upgraded version of Budget.</p>
                        <p class="card-text">So simple to use your child could manage your expenses,
                            we wouldn't suggest it, but they could.</p>
                        <a href="https://budget-pro.costs-to-expect.com/"
                           class="btn btn-outline-primary">App</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.3.0 (alpha)<br/>
                            <strong>Release date:</strong> 13th June 2023
                        </small>
                    </div>
                </div>

                <!--Yahtzee-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/App</div>
                    <div class="card-body">
                        <h4 class="card-title" id="yahtzee">Yahtzee Game Scorer</a></h4>
                        <p class="card-text">Game scoring for Yahtzee, powered by the Costs to Expect API</p>
                        <p class="card-text">The Costs to Expect has been designed to handle multiple types of data, the
                            game scoring apps are an example to show the Costs to Expect API isn't just for expenses.</p>
                        <a href="https://github.com/costs-to-expect/yahtzee" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://yahtzee.game-scorer.com"
                           class="btn btn-outline-secondary">App</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.08.0<br/>
                            <strong>Release date:</strong> 30th January 2023
                        </small>
                    </div>
                </div>
            </div>

            <div class="card-deck mb-4">
                <!--Yatzy-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/App</div>
                    <div class="card-body">
                        <h4 class="card-title" id="yatzy">Yatzy Game Scorer</a></h4>
                        <p class="card-text">Game scoring for Yatzy, powered by the Costs to Expect API</p>
                        <p class="card-text">The Costs to Expect has been designed to handle multiple types of data, the
                            game scoring apps are an example to show the Costs to Expect API isn't just for expenses.</p>
                        <a href="https://github.com/costs-to-expect/yatzy" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://yatzy.game-scorer.com"
                           class="btn btn-outline-secondary">App</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.02.0<br/>
                            <strong>Release date:</strong> 30th January 2023
                        </small>
                    </div>
                </div>

                <!--Prune-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/App</div>
                    <div class="card-body">
                        <h4 class="card-title" id="prune-2d">Prune 2D Game Engine</a></h4>
                        <p class="card-text">Prune2D may one day become a simple 2D game engine, for now it is a fun project.</p>
                        <p class="card-text">I'm playing with C++ and figured a great way learn the language would be
                            building a 2d game engine ;). As well as learning and using C++ in anger, I'm primarily
                            going to use Prune2D to teach my kids how to code and build lots of fun little games.</p>
                        <a href="https://github.com/deanblackborough/Prune2D" class="btn btn-outline-primary">GitHub</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v0.08.0<br/>
                            <strong>Release date:</strong> 1st June 2022
                        </small>
                    </div>
                </div>
            </div>

            <div class="card-deck mb-4">
                <!--Maths Quiz-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/App</div>
                    <div class="card-body">
                        <h4 class="card-title" id="maths-quiz">Maths Quiz</a></h4>
                        <p class="card-text">Small Maths quiz app to generate questions for my 9 and 3-year-old.</p>
                        <p class="card-text">Very much a work in progress as I start playing around with C++.</p>
                        <a href="https://github.com/deanblackborough/MathsQuiz" class="btn btn-outline-primary">GitHub</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v0.02.0<br/>
                            <strong>Release date:</strong> 5th December 2021
                        </small>
                    </div>
                </div>

                <!--Website-->
                <div class="card text-white bg-dark">
                    <div class="card-header">Project/Website</div>
                    <div class="card-body">
                        <h4 class="card-title" id="costs-to-expect">Costs to Expect: The Website</a></h4>
                        <p class="card-text">How much does it cost to raise a child in the UK?.
                            Costs to Expect is a long term project, my wife and I are tracking
                            the expenses to raise our child to adulthood, 18.</p>
                        <p class="card-text">The Costs to Expect website will show the costs to raise
                            both our children (Jack and Niall) to adulthood.</p>
                        <a href="https://github.com/costs-to-expect/website"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://www.costs-to-expect.com"
                           class="btn btn-outline-secondary">Website</a>
                        <a href="https://www.costs-to-expect.com/changelog"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v2.01.1<br/>
                            <strong>Release date:</strong> 3rd February 2023
                        </small>
                    </div>
                </div>
            </div>

            <h2>Utility projects</h2>

            <p>Small projects that I find useful across a range of apps and websites.</p>

            <div class="card-deck mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-header">Library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="PHP-Quill-Renderer"><a href="php-quill-renderer.php">PHP Quill Renderer</a></h4>
                        <p class="card-text">Quill deltas renderer, converts deltas to HTML, Markdown and Github flavoured Markdown,
                            the Quill attributes supported are listed in the table in the README, the goal is to
                            eventually support every Quill feature and add additional parsers.</p>
                        <a href="https://github.com/deanblackborough/php-quill-renderer"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="/php-quill-renderer.php" class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/php-quill-renderer/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v4.01.0<br/>
                            <strong>Release date:</strong> 15th December 2021
                        </small>
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-header">Library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Laravel-view-helpers">Laravel view helpers</h4>
                        <p class="card-text">A growing collection of general and bootstrap specific view helpers for use in
                            Laravel blades.</p>

                        <ul>
                            <li>Pagination</li>
                        </ul>
                        <a href="https://github.com/deanblackborough/laravel-view-helpers" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/laravel-view-helpers/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/laravel-view-helpers/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.00.3<br/>
                            <strong>Release date:</strong> 30th July 2019
                        </small>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-header">Library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Bootstrap-4-helpers">Bootstrap 4 helpers</h4>
                        <p class="card-text">Utility wrapper classes for the Bootstrap 4 view helpers in my
                            <a href="https://github.com/deanblackborough/zf3-view-helpers">ZF3-view-helpers library</a>,
                            allows usage of the view helpers in any PHP site, not just Zend Framework apps.</p>
                        <a href="https://github.com/deanblackborough/bootstrap-4-helpers"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/bootstrap-4-helpers/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v0.04<br/>
                            <strong>Release date:</strong> 21st January 2018
                        </small>
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-header">Quickstart</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Quick-start-for-a-PHP-MySQL-web-app">Quick start for a PHP/MySQL web
                            app </h4>
                        <p class="card-text">Bootstrap to help with the setup of a PHP/MySQL web app using Docker for
                            local development, this app does not do anything other than echo phpinfo(); it is
                            simply a starting point for your development.</p>
                        <a href="https://github.com/deanblackborough/docker-compose-quick-start"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/docker-compose-quick-start/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/docker-compose-quick-start/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v0.01<br/>
                            <strong>Release date:</strong> 22nd April 2018
                        </small>
                    </div>
                </div>
            </div>

            <div class="card-deck mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-header">Library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Random-Grab-Bag">Random Grab Bag</h4>
                        <p class="card-text">A bunch of utility classes that don't currently deserve their own
                            package.</p>

                        <ul>
                            <li>Image resizer</li>
                            <li>Excel parser</li>
                        </ul>
                        <a href="https://github.com/deanblackborough/random-grab-bag" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/random-grab-bag/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/random-grab-bag/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v0.06<br/>
                            <strong>Release date:</strong> 20th June 2017
                        </small>
                    </div>
                </div>
            </div>

            <hr />

            <h2>Personal projects</h2>

            <p>Small personal projects.</p>

            <div class="card-deck mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-header">Project</div>
                    <div class="card-body">
                        <h4 class="card-title" id="holiday-expenses">Holiday Expenses</h4>
                        <p class="card-text">Small app to interact with my Costs to Expect API to track holiday expenses.</p>
                        <a href="https://github.com/deanblackborough/holiday-expenses"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/holiday-expenses/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.00.0<br/>
                            <strong>Release date:</strong> 15th November 2018
                        </small>
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-header">Project</div>
                    <div class="card-body">
                        <h4 class="card-title" id="costs-to-expect-legacy">Costs to Expect initial data collector</h4>
                        <p class="card-text">Legacy app to allow expenses to be entered into the Costs to Expect API.</p>
                        <a href="https://github.com/costs-to-expect/web-app"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/costs-to-expect/web-app/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/costs-to-expect/web-app/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.04.8<br/>
                            <strong>Release date:</strong> 24th September 2019
                        </small>
                    </div>
                </div>
            </div>

            <hr />

            <h2>Zend framework</h2>

            <p>Helper libraries for my Zend Framework 3 projects.</p>

            <div class="card-deck mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-header">ZF3 Library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Zend-Framework-3-View-Helpers">Zend Framework 3 View Helpers</h4>
                        <p class="card-text">A collection of Zend Framework 3 view helpers, primarily focused
                            on Bootstrap 3 and 4, the plan is to add support for every component within
                            Bootstrap 4 and work from there.</p>
                        <a href="https://github.com/deanblackborough/zf3-view-helpers" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/zf3-view-helpers/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/zf3-view-helpers/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.02.2<br/>
                            <strong>Release date:</strong> 16th May 2018
                        </small>
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-header">ZF3 Library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Zend-Framework-3-View-Helpers-Code-Completion">Zend Framework 3 View
                            Helpers Code Completion</h4>
                        <p class="card-text">Do you like using view helpers? If the answer is yes, you will
                            have noticed there is no code completion for them in your IDE, the classes in this
                            package will solve that problem.</p>
                        <a href="https://github.com/deanblackborough/zf3-view-helpers-code-completion"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/deanblackborough/zf3-view-helpers-code-completion/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/deanblackborough/zf3-view-helpers-code-completion/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.07.0<br/>
                            <strong>Release date:</strong> 20th January 2018
                        </small>
                    </div>
                </div>
            </div>

            <hr/>

            <h2>Dlayer: Responsive web development <small>(Archived)</small></h2>

            <p>A project I have been working on for a number of years, the majority of my small projects
                spawn from requirements for Dlayer.</p>

            <div class="card-deck mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-header">Project</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Dlayer">Dlayer</h4>
                        <p class="card-text">Dlayer is an Open Source responsive web development tool aimed
                            primarily at users with limited web design or development experience.</p>
                        <a href="https://github.com/dlayer/dlayer" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/dlayer/dlayer/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.17<br/>
                            <strong>Release date:</strong> 13th September 2017
                        </small>
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-header">Project</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Dlayer-v-Next">Dlayer v Next: migration to Zend Framework 3</h4>
                        <p class="card-text">Dlayer is an Open Source responsive web development tool aimed
                            primarily at users with limited web design or development experience.</p>
                        <a href="https://github.com/dlayer/responsive-web-development" class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/dlayer/responsive-web-development/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> None<br/>
                            <strong>Release date:</strong> Archived
                        </small>
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-header">ZF3 library</div>
                    <div class="card-body">
                        <h4 class="card-title" id="Dlayer-View-helpers">Dlayer: View helpers</h4>
                        <p class="card-text">Custom ZF3 view helpers for Dlayer vNext, some of these view
                            helpers may be useful in your projects, they were created to solve problems
                            within Dlayer vNext, they might be useful to you with minor changes.</p>
                        <a href="https://github.com/dlayer/view-helpers"
                           class="btn btn-outline-primary">GitHub</a>
                        <a href="https://github.com/dlayer/view-helpers/blob/master/README.md"
                           class="btn btn-outline-secondary">Overview</a>
                        <a href="https://github.com/dlayer/view-helpers/blob/master/CHANGELOG.md"
                           class="btn btn-outline-secondary">Changelog</a>
                    </div>
                    <div class="card-footer text-muted">
                        <small><strong>Latest release:</strong> v1.00.0<br/>
                            <strong>Release date:</strong> 18th October 2017
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer bg-dark text-light">
    <dl class="row">
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#costs-to-expect-api">Costs to Expect: The API</a></dt>
        <dd class="col-lg-4">
            <p>The RESTful API for Costs to Expect, an expenses tracking and forecasting service.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#costs-to-expect-budget">Costs to Expect: Budget</a></dt>
        <dd class="col-lg-4">
            <p>A free and open source budgeting tool.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#costs-to-expect-budget-pro">Costs to Expect: Budget Pro</a></dt>
        <dd class="col-lg-4">
            <p>The upgraded version of Budget, a free open source budgeting tool powered by the Costs to Expect API.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#yahtzee">Yahtzee Game Scorer</a></dt>
        <dd class="col-lg-4">
            <p>Game scoring for Yahtzee, powered by the Costs to Expect API.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#yatzy">Yatzy Game Scorer</a></dt>
        <dd class="col-lg-4">
            <p>Game scoring for Yatzy, powered by the Costs to Expect API.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#prune-2d">Prune 2D Game engine</a></dt>
        <dd class="col-lg-4">
            <p>Prune2D may one day become a simple 2D game engine, for now it is a fun project.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#maths-quiz">Maths Quiz</a></dt>
        <dd class="col-lg-4">
            <p>Small Maths quiz app to generate questions for my 9 and 3-year-old.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="php-quill-renderer.php">PHP Quill Renderer</a></dt>
        <dd class="col-lg-4">
            <p>Quill deltas renderer, converts deltas to HTML, the Quill attributes supported are listed in
                the table in the README, the goal is to eventually support every Quill feature and add
                additional parsers, Markdown?</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Laravel-view-helpers">Laravel view helpers</a></dt>
        <dd class="col-lg-4">
            <p>A growing collection of general and bootstrap specific view helpers for use in Laravel blades.</p>
            <ul>
                <li>Pagination</li>
            </ul>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Bootstrap-4-helpers">Bootstrap 4 helpers</a></dt>
        <dd class="col-lg-4">
            <p>Utility wrapper classes for the Bootstrap 4 view helpers in my ZF3-view-helpers library,
                allows usage of the view helpers in any PHP site, not just Zend Framework apps.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Quick-start-for-a-PHP-MySQL-web-app">Quick start for a PHP/MySQL web
            app</a></dt>
        <dd class="col-lg-4">
            <p>Bootstrap to help with the setup of a PHP/MySQL web app using Docker for local development,
                this app does not do anything other than echo phpinfo() it is simply a starting point for
                your development.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Random-Grab-Bag">Random Grab Bag</a></dt>
        <dd class="col-lg-4">
            <p>A bunch of utility classes that don't currently deserve their own package.</p>
            <ul>
                <li>Image resizer</li>
                <li>Excel parser</li>
            </ul>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#holiday-expenses">Holiday Expenses</a></dt>
        <dd class="col-lg-4">
            <p>Small app to interact with my Costs to Expect API to track holiday expenses.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#costs-to-expect-legacy">Costs To Expect data recorder</a></dt>
        <dd class="col-lg-4">
            <p>Legacy app to allow expenses to be entered into the Costs to Expect API.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Zend-Framework-3-View-Helpers">Zend Framework 3 View Helpers</a></dt>
        <dd class="col-lg-4">
            <p>A collection of Zend Framework 3 view helpers, primarily focused on Bootstrap 3 and 4, the plan
                is to add support for every component within Bootstrap 4 and work from there.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Zend-Framework-3-View-Helpers-Code-Completion">Zend Framework 3 View
            Helpers Code Completion</a></dt>
        <dd class="col-lg-4">
            <p>Do you like using view helpers? If the answer is yes, you will have noticed there is no code
                completion for them in your IDE, the classes in this package will solve that problem.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Dlayer-v-Next">Dlayer v Next: migration to Zend Framework 3</a></dt>
        <dd class="col-lg-4">
            <p>Dlayer is an Open Source responsive web development tool aimed primarily at users with limited
                web design or development experience.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Dlayer">Dlayer: Responsive web development</a></dt>
        <dd class="col-lg-4">
            <p>Dlayer is an Open Source responsive web development tool aimed primarily at users with limited
                web design or development experience.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="#Dlayer-View-helpers">Dlayer: View helpers</a></dt>
        <dd class="col-lg-4">
            <p>Custom ZF3 view helpers for Dlayer vNext, some of these view helpers may be useful in your
                projects, they were created to solve problems within Dlayer vNext, they might be useful to you
                with minor changes.</p>
        </dd>
    </dl>
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>
                All Packages Copyright &copy; Dean Blackborough or G3D Development.<br/>
                All code maintained by
                <a href="http://www.deanblackborough.com">Dean Blackborough</a> and licensed under MIT.
            </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="/node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="/node_modules/popper.js/dist/umd/popper.js"></script>
<script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

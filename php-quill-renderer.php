<?php require __DIR__ . '/vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transmute Coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Open Source PHP packages by Dean Blackborough">
    <meta name="author" content="Dean Blackborough">
    <meta name="application-name" content="Transmute-coffee.com"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-starturl" content="http://www.transmute-coffee.com"/>
    <meta name="msapplication-tooltip" content="Transmute Coffee.com"/>
    <link href="/node_modules/bootstrap/dist/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/node_modules/quill/dist/quill.snow.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/css/site.css" media="screen" rel="stylesheet" type="text/css">
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
                <a class="nav-link" href="php-quill-renderer.php">PHP Quill Renderer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="https://github.com/deanblackborough/zf3-view-helpers">ZF3 View Helpers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.deanblackborough.com">Dean Blackborough.com</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.gsd-development.com">G3D Development Limited</a>
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
                <h1 class="display-3">PHP Quill Renderer</h1>
                <p class="text-right">
                    <a href="https://github.com/deanblackborough/php-quill-renderer"
                       class="btn btn-primary">View on GitHub - v3.10.1</a>
                    <a href="https://github.com/deanblackborough/php-quill-renderer/blob/master/CHANGELOG.md"
                       class="btn btn-secondary">View changelog</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1>PHP Quill Renderer</h1>

            <p class="lead">Quill deltas renderer, converts deltas to HTML, the Quill attributes supported
                are listed in the table in the README, the goal is to eventually support every Quill feature and
                add additional parsers, Markdown?</p>

            <p class="lead">29th May 2018 - Markdown support in development!</p>

          <p><a href="https://github.com/quilljs/quill">Quilljs</a> is a modern WYSIWYG editor built for
                compatibility and extensibility.</p>

            <p>In my projects I include Quill via <code>yarn</code>, create a hidden input to store the data and then
                on submit pass the data along to the hidden input.</p>

            <h3>Instantiate the editor</h3>
            <pre class="bg-secondary text-light p-4">
var quill = new Quill('#quill-editor', {
    modules: {
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['link'],
            [{ 'script': 'sub'}, { 'script': 'super' }],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            ['clean']
        ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
});</pre>

            <h3>Pass to hidden input</h3>
            <pre class="bg-secondary text-light p-4">
$('form').submit(function() {
    $('#hidden_element').val(JSON.stringify(quill.getContents()));
    return true;
});</pre>

            <h2>Installation</h2>

            <p>The easiest way to use the renderer is via composer.
                <code>composer require deanblackborough/php-quill-renderer</code>, alternatively you can
                include the classes in my src/ directory in your library or app.</p>

            <h2>Usage</h2>

            <pre class="bg-secondary text-light p-4">
try {
    $quill = new \DBlackborough\Quill\Render($quill_json, 'HTML');
    $result = $quill->render();
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo $result;</pre>

            <p>You can view the entire README on <a href="https://github.com/deanblackborough/php-quill-renderer">GitHub</a></p>

            <h2 id="demo">Demo <small>v3.11.0</small></h2>

            <p class="lead">Enter some content into the Quill editor and click 'Parse' to see the HTML generated by
                PHP Quill Renderer.</p>

            <form action="/php-quill-renderer.php#demo" method="post" class="demo">
                <input type="hidden" id="quill-editor-input" name="quill-editor-input" />

                <div id="quill-editor"></div>
                <p class="mt-1">
                    <input type="submit" name="submit" value="Parse" class="btn-outline-dark" />
                </p>
            </form>

            <p><em>No submitted text is saved, I simply pass the POSTed text along to the PHP Quill Renderer and
                output, check <a href="https://github.com/deanblackborough/transmute-coffee/blob/master/php-quill-renderer.php">here</a>
                if you would like to confirm.</em></p>

            <?php if(isset($_POST['submit']) === true && strlen(trim($_POST['quill-editor-input'])) > 0) { ?>

            <h3>Deltas JSON</h3>

            <pre class="bg-secondary text-light p-4"><?php echo $_POST['quill-editor-input']; ?></pre>

            <h3>Generated HTML</h3>

            <div class="bg-light p-4 border">
            <?php
                try {
                    $quill = new \DBlackborough\Quill\Render(trim($_POST['quill-editor-input']), 'HTML');
                    $html = $quill->render();
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }

                echo $html . PHP_EOL;;
                echo '<hr />' . PHP_EOL;
                echo htmlentities($html);
            ?>
            </div>

            <h2>Noticed a bug?</h2>

            <p>If the demo generates invalid HTML or HTML that just looks weird and doesn't work as expected,
                please raise an <a href="https://github.com/deanblackborough/php-quill-renderer/issues">issue</a>
                on GitHub posting the deltas json and the broken HTML, every bug report is very much appreciated.</p>

            <?php } ?>
        </div>
    </div>
</div>
<div class="footer bg-dark text-light">
    <dl class="row">
        <dt class="col-lg-2 offset-lg-3"><a href="php-quill-renderer.php">PHP Quill Renderer</a></dt>
        <dd class="col-lg-4">
            <p>Quill deltas renderer, converts deltas to HTML, the Quill attributes supported are listed in
                the table in the README, the goal is to eventually support every Quill feature and add
                additional parsers, Markdown?</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Bootstrap-4-helpers">Bootstrap 4 helpers</a></dt>
        <dd class="col-lg-4">
            <p>Utility wrapper classes for the Bootstrap 4 view helpers in my ZF3-view-helpers library,
                allows usage of the view helpers in any PHP site, not just Zend Framework apps.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Random-Grab-Bag">Random Grab Bag</a></dt>
        <dd class="col-lg-4">
            <p>A bunch of utility classes that don't currently deserve their own package.</p>
            <ul>
                <li>Image resizer</li>
                <li>Excel parser</li>
            </ul>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Quick-start-for-a-PHP-MySQL-web-app">Quick start for a PHP/MySQL web
            app</a></dt>
        <dd class="col-lg-4">
            <p>Bootstrap to help with the setup of a PHP/MySQL web app using Docker for local development,
                this app does not do anything other than echo phpinfo() it is simply a starting point for
                your development.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Zend-Framework-3-View-Helpers">Zend Framework 3 View Helpers</a></dt>
        <dd class="col-lg-4">
            <p>A collection of Zend Framework 3 view helpers, primarily focused on Bootstrap 3 and 4, the plan
                is to add support for every component within Bootstrap 4 and work from there.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Zend-Framework-3-View-Helpers-Code-Completion">Zend Framework 3 View
            Helpers Code Completion</a></dt>
        <dd class="col-lg-4">
            <p>Do you like using view helpers? If the answer is yes, you will have noticed there is no code
                completion for them in your IDE, the classes in this package will solve that problem.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Dlayer-v-Next">Dlayer v Next: migration to Zend Framework 3</a></dt>
        <dd class="col-lg-4">
            <p>Dlayer is an Open Source responsive web development tool aimed primarily at users with limited
                web design or development experience.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Dlayer">Dlayer: Responsive web development</a></dt>
        <dd class="col-lg-4">
            <p>Dlayer is an Open Source responsive web development tool aimed primarily at users with limited
                web design or development experience.</p>
        </dd>
        <dt class="col-lg-2 offset-lg-3"><a href="index.php#Dlayer-View-helpers">Dlayer: View helpers</a></dt>
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
<script src="node_modules/quill/dist/quill.js"></script>
<script>
    var quill = new Quill('#quill-editor', {
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['link'],
                [{ 'script': 'sub'}, { 'script': 'super' }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['clean']
            ]
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });

    $('form.demo').submit(function() {
        $('#quill-editor-input').val(JSON.stringify(quill.getContents()));
        return true;
    });

    <?php if(isset($_POST['submit']) === true && strlen(trim($_POST['quill-editor-input'])) > 0) { ?>
    quill.setContents(<?php echo trim($_POST['quill-editor-input']); ?>);
    <?php } ?>
</script>
</body>
</html>

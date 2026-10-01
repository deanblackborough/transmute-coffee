<?php

declare(strict_types=1);

// The Quill demo page is gone, but Packagist and old links still point here. Send them to the
// (archived) repository permanently. A real file rather than a route so it works whatever the
// nginx config does with unknown .php URLs.
header('Location: https://github.com/deanblackborough/php-quill-renderer', true, 301);

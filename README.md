[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/deanblackborough/transmute-coffee/blob/master/LICENSE)
[![Minimum PHP Version](https://img.shields.io/badge/php-%5E8.4-8892BF.svg)](https://php.net/)

# Transmute Coffee

The [transmute-coffee.com](https://transmute-coffee.com) website, an index of my projects: the Costs to Expect API,
Prune, my apps, games and experiments, and my Open Source libraries.

Plain PHP, no framework and no Composer packages. Styled with Tailwind CSS using the standalone CLI, no Node.

## Local development

```bash
docker compose up -d
```

The site is then at http://transmute-coffee.local (the vhost serves `public/`). Changing `.docker/vhost.conf`
needs `docker compose up -d --build`.

## CSS

Tailwind is compiled with the standalone CLI, `bin/css` downloads the right binary for your machine on first run.
The source is `resources/css/app.css`, the output is committed so a deploy doesn't need to build anything.

```bash
bin/css            # build
bin/css --watch    # rebuild as you edit
```

The output goes to `public/css/{version}/app.css`. Bump `css` in `config/app/version.php` when the CSS changes so
nobody is served a stale cached copy.

## Adding a project

Add an entry to `config/projects.php`, the comment at the top of the file explains each key. Sections are in
`config/sections.php`. Set `'commercial' => true` for anything that costs money and `'featured' => true` to show a
project large under "Major projects".

Versions, stars and licences are not written by hand, they come from GitHub:

```bash
php bin/releases
```

This rewrites `data/releases.json`, commit it. It makes about 30 requests and the unauthenticated GitHub limit is
60 an hour, set `GITHUB_TOKEN` if you run it more often.

## Deployment

Deployed with Laravel Forge. Set the site's web directory to `/public`, nothing else in the repository should be
reachable. The deploy script only needs to pull, there is nothing to install or build.

The nginx config needs the standard PHP site `try_files $uri $uri/ /index.php?$query_string;` so unknown URLs reach
the front controller and get a real 404.

`public/php-quill-renderer.php` is the old demo page, it 301s to the GitHub repository because Packagist and old
links still point to it.

## Layout

| Path | |
| --- | --- |
| `public/` | Web root: `index.php` front controller, built CSS, images, favicons, `robots.txt`, `sitemap.xml` |
| `config/` | Site settings, sections and the projects |
| `resources/views/` | Templates, `resources/css/app.css` is the Tailwind source |
| `app/` | A few helpers and the structured data (JSON-LD) builder |
| `data/releases.json` | Written by `bin/releases` |

## Licence

MIT, see [LICENSE](LICENSE).

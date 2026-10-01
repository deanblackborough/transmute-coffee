<?php
/**
 * @var array $site
 */
?>
<header class="relative isolate flex min-h-screen flex-col overflow-hidden">
    <div class="starfield absolute inset-0 -z-20" aria-hidden="true"></div>
    <div class="absolute inset-0 -z-10 bg-linear-to-b from-night-950/0 via-night-950/0 to-night-950"></div>
    <img src="/img/moon.svg" alt="" width="600" height="600" class="pointer-events-none absolute -right-[14%] top-[2%] -z-10 h-auto w-[min(110vw,760px)] max-w-none opacity-30 lg:opacity-100">

    <nav class="mx-auto flex w-full max-w-6xl items-center justify-between gap-4 px-6 py-6" aria-label="Main">
        <a href="/" class="flex items-center gap-2.5 whitespace-nowrap font-display text-lg text-moon-50 sm:text-xl"><?= icon('crescent', 'size-6 text-gold-400') ?>Transmute Coffee</a>
    </nav>

    <main class="mx-auto w-full max-w-6xl flex-1 px-6 pb-28 pt-16 sm:pt-24">
        <p class="font-mono text-xs uppercase tracking-[0.25em] text-gold-400">404</p>
        <h1 class="mt-6 font-display text-6xl leading-[0.95] tracking-tight text-moon-50 sm:text-7xl">Lost in <span class="italic text-gold-300">space</span></h1>
        <p class="mt-8 max-w-xl text-lg leading-relaxed sm:text-xl">There&rsquo;s nothing at this address. The projects are all on the home page.</p>
        <div class="mt-10">
            <a href="/" class="inline-flex items-center gap-2 rounded-full bg-gold-400 px-6 py-3 font-semibold text-night-950 transition hover:bg-gold-300">Back to the projects</a>
        </div>
    </main>
</header>

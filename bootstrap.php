<?php

use App\Listeners\GenerateSitemap;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->beforeBuild(function (Jigsaw $jigsaw) {
    $defaultLocale = $jigsaw->getConfig('default_locale');
    Carbon::setLocale($defaultLocale);
    CarbonImmutable::setLocale($defaultLocale);
    setlocale(LC_ALL, $jigsaw->getConfig('locales.' . $defaultLocale));
});

$events->afterBuild(GenerateSitemap::class);

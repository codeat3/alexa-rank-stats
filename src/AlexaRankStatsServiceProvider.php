<?php

namespace Codeat3\AlexaRankStats;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Codeat3\AlexaRankStats\Commands\AlexaRankStatsCommand;

class AlexaRankStatsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('alexa-rank-stats')
            ->hasConfigFile();
    }
}

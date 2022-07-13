<?php

namespace Spatie\WeightConversion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\WeightConversion\Commands\WeightConversionCommand;

class WeightConversionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weight-conversion')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_weight-conversion_table')
            ->hasCommand(WeightConversionCommand::class);
    }
}

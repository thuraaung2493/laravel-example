<?php

namespace Thuraaung2493\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thuraaung2493\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_example_table')
            ->hasCommand(ExampleCommand::class);
    }
}

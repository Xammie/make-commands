<?php

namespace Xammie\MakeCommands;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Xammie\MakeCommands\Commands\MakeCommandsCommand;

class MakeCommandsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('make-commands')
            ->hasConfigFile()
            ->hasCommand(MakeCommandsCommand::class);
    }
}

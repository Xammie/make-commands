<?php

namespace Xammie\MakeCommands;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Xammie\MakeCommands\Commands\ActionMakeCommand;
use Xammie\MakeCommands\Commands\CollectionMakeCommand;
use Xammie\MakeCommands\Commands\ConfigMakeCommand;
use Xammie\MakeCommands\Commands\ContractMakeCommand;
use Xammie\MakeCommands\Commands\DtoMakeCommand;
use Xammie\MakeCommands\Commands\EnumMakeCommand;
use Xammie\MakeCommands\Commands\InterfaceMakeCommand;
use Xammie\MakeCommands\Commands\RepositoryMakeCommand;
use Xammie\MakeCommands\Commands\ServiceMakeCommand;
use Xammie\MakeCommands\Commands\TraitMakeCommand;

class MakeCommandsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('make-commands')
            ->hasConfigFile()
            ->hasCommands([
                ActionMakeCommand::class,
                CollectionMakeCommand::class,
                ConfigMakeCommand::class,
                ContractMakeCommand::class,
                DtoMakeCommand::class,
                EnumMakeCommand::class,
                InterfaceMakeCommand::class,
                RepositoryMakeCommand::class,
                ServiceMakeCommand::class,
                TraitMakeCommand::class,
            ]);
    }

    public function bootingPackage()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->package->basePath('/../src/Commands/stubs') => base_path('stubs'),
            ], "{$this->package->shortName()}-stubs");
        }
    }
}

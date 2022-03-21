<?php

use function Pest\Laravel\artisan;
use Xammie\MakeCommands\Commands\ActionMakeCommand;
use Xammie\MakeCommands\Commands\CollectionMakeCommand;
use Xammie\MakeCommands\Commands\ContractMakeCommand;
use Xammie\MakeCommands\Commands\DtoMakeCommand;
use Xammie\MakeCommands\Commands\EnumMakeCommand;
use Xammie\MakeCommands\Commands\InterfaceMakeCommand;
use Xammie\MakeCommands\Commands\RepositoryMakeCommand;
use Xammie\MakeCommands\Commands\ServiceMakeCommand;
use Xammie\MakeCommands\Commands\TraitMakeCommand;

it('can make action', function () {
    artisan(ActionMakeCommand::class, ['name' => 'TestAction'])->assertExitCode(0);
});

it('can make collection', function () {
    artisan(CollectionMakeCommand::class, ['name' => 'TestCollection'])->assertExitCode(0);
});

it('can make contract', function () {
    artisan(ContractMakeCommand::class, ['name' => 'TestContract'])->assertExitCode(0);
});

it('can make dto', function () {
    artisan(DtoMakeCommand::class, ['name' => 'TestDto'])->assertExitCode(0);
});

it('can make enum', function () {
    artisan(EnumMakeCommand::class, ['name' => 'TestEnum'])->assertExitCode(0);
});

it('can make interface', function () {
    artisan(InterfaceMakeCommand::class, ['name' => 'TestInterface'])->assertExitCode(0);
});

it('can make repository', function () {
    artisan(RepositoryMakeCommand::class, ['name' => 'TestRepository'])->assertExitCode(0);
});

it('can make service', function () {
    artisan(ServiceMakeCommand::class, ['name' => 'TestService'])->assertExitCode(0);
});

it('can make trait', function () {
    artisan(TraitMakeCommand::class, ['name' => 'TestTrait'])->assertExitCode(0);
});

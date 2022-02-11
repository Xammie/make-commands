<?php

use function Pest\Laravel\artisan;
use Xammie\MakeCommands\Commands\ActionMakeCommand;
use Xammie\MakeCommands\Commands\ContractMakeCommand;
use Xammie\MakeCommands\Commands\DtoMakeCommand;
use Xammie\MakeCommands\Commands\EnumMakeCommand;
use Xammie\MakeCommands\Commands\ServiceMakeCommand;

it('can make action', function () {
    artisan(ActionMakeCommand::class, ['name' => 'TestAction'])->assertSuccessful();
});

it('can make contract', function () {
    artisan(ContractMakeCommand::class, ['name' => 'TestContract'])->assertSuccessful();
});

it('can make dto', function () {
    artisan(DtoMakeCommand::class, ['name' => 'TestDto'])->assertSuccessful();
});

it('can make enum', function () {
    artisan(EnumMakeCommand::class, ['name' => 'TestEnum'])->assertSuccessful();
});

it('can make service', function () {
    artisan(ServiceMakeCommand::class, ['name' => 'TestService'])->assertSuccessful();
});

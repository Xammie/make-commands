<?php

use function Pest\Laravel\artisan;
use Xammie\MakeCommands\Commands\ActionMakeCommand;
use Xammie\MakeCommands\Commands\ContractMakeCommand;
use Xammie\MakeCommands\Commands\DtoMakeCommand;
use Xammie\MakeCommands\Commands\EnumMakeCommand;
use Xammie\MakeCommands\Commands\ServiceMakeCommand;

it('can make action', function () {
    artisan(ActionMakeCommand::class, ['name' => 'TestAction'])->assertExitCode(0);
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

it('can make service', function () {
    artisan(ServiceMakeCommand::class, ['name' => 'TestService'])->assertExitCode(0);
});

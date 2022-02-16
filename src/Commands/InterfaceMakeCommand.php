<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class InterfaceMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:interface';

    protected $description = 'Create a new interface';

    protected $type = 'Interface';

    protected function stubName(): string
    {
        return 'interface';
    }
}

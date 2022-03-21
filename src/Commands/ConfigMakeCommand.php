<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class ConfigMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:config';

    protected $description = 'Create a new config file';

    protected $type = 'Config';

    protected function stubName(): string
    {
        return 'config';
    }
}

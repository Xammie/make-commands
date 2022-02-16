<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class DtoMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:dto';

    protected $description = 'Create a new dto class';

    protected $type = 'Dto';

    protected function stubName(): string
    {
        return 'dto';
    }
}

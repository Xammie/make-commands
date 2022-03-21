<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class TraitMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:trait';

    protected $description = 'Create a new trait';

    protected $type = 'Trait';

    protected function stubName(): string
    {
        return 'trait';
    }
}

<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class CollectionMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:collection';

    protected $description = 'Create a new collection class';

    protected $type = 'Collection';

    protected function stubName(): string
    {
        return 'collection';
    }
}

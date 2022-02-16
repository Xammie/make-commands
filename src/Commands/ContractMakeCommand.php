<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class ContractMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:contract';

    protected $description = 'Create a new contract interface';

    protected $type = 'Contract';

    protected function stubName(): string
    {
        return 'contract';
    }
}

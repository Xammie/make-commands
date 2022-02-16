<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class EnumMakeCommand extends GeneratorCommand
{
    use GeneratorTrait;

    protected $name = 'make:enum';

    protected $description = 'Create a new enum';

    protected $type = 'Enum';

    protected function stubName(): string
    {
        return 'enum';
    }

    protected function getStub(): string
    {
        // Enums are available since PHP 8.1
        if (version_compare(PHP_VERSION, '8.1.0', '<')) {
            return $this->resolveStubPath('/stubs/class-enum.stub');
        }

        return $this->resolveStubPath("/stubs/{$this->stubName()}.stub");
    }
}

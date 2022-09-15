<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

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

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return str_replace('\\', '/', base_path($name)).'.php';
    }

    protected function alreadyExists($rawName): bool
    {
        return $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }
}

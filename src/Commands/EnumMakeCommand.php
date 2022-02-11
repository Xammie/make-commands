<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class EnumMakeCommand extends GeneratorCommand
{
    protected $name = 'make:enum';

    protected $description = 'Create a new enum';

    protected $type = 'Enum';

    protected function alreadyExists($rawName): bool
    {
        return class_exists($rawName) || $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }

    protected function getStub(): string
    {
        // Enums are available since PHP 8.1
        if (version_compare(PHP_VERSION, '8.1.0', '<')) {
            return $this->resolveStubPath('/stubs/class-enum.stub');
        }

        return $this->resolveStubPath('/stubs/enum.stub');
    }

    protected function resolveStubPath(string $stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Enums';
    }
}

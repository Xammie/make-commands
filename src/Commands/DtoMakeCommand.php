<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class DtoMakeCommand extends GeneratorCommand
{
    protected $name = 'make:dto';

    protected $description = 'Create a new dto class';

    protected $type = 'Dto';

    protected function alreadyExists($rawName): bool
    {
        return class_exists($rawName) || $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/dto.stub');
    }

    protected function resolveStubPath(string $stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Dtos';
    }
}

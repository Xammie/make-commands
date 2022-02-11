<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class ServiceMakeCommand extends GeneratorCommand
{
    protected $name = 'make:service';

    protected $description = 'Create a new service class';

    protected $type = 'Service';

    protected function alreadyExists($rawName): bool
    {
        return class_exists($rawName) || $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/service.stub');
    }

    protected function resolveStubPath(string $stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Services';
    }
}

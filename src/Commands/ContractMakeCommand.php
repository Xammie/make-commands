<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\GeneratorCommand;

class ContractMakeCommand extends GeneratorCommand
{
    protected $name = 'make:contract';

    protected $description = 'Create a new contract interface';

    protected $type = 'Contract';

    protected function alreadyExists($rawName): bool
    {
        return class_exists($rawName) || $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/contract.stub');
    }

    protected function resolveStubPath(string $stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Contracts';
    }
}

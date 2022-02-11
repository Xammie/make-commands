<?php

namespace Xammie\MakeCommands\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Xammie\MakeCommands\MakeCommandsServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            MakeCommandsServiceProvider::class,
        ];
    }
}

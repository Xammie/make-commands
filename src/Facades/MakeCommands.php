<?php

namespace Xammie\MakeCommands\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xammie\MakeCommands\MakeCommands
 */
class MakeCommands extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'make-commands';
    }
}

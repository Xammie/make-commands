<?php

namespace Xammie\MakeCommands\Commands;

use Illuminate\Console\Command;

class MakeCommandsCommand extends Command
{
    public $signature = 'make-commands';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

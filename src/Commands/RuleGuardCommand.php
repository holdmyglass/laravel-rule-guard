<?php

namespace Holdmyglass\RuleGuard\Commands;

use Illuminate\Console\Command;

class RuleGuardCommand extends Command
{
    public $signature = 'laravel-rule-guard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

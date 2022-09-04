<?php

namespace Lloricode\MailspfcheckerHealthCheck\Commands;

use Illuminate\Console\Command;

class MailspfcheckerHealthCheckCommand extends Command
{
    public $signature = 'mailspfchecker-health-check';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

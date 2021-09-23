<?php

namespace Codeat3\AlexaRankStats\Commands;

use Illuminate\Console\Command;

class AlexaRankStatsCommand extends Command
{
    public $signature = 'alexa-rank-stats';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}

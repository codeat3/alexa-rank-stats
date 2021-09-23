<?php

namespace Codeat3\AlexaRankStats;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeat3\AlexaRankStats\AlexaRankStats
 */
class AlexaRankStatsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'alexa-rank-stats';
    }
}

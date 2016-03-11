<?php

namespace EveOnlineBridge\Service\Facades;

use Illuminate\Support\Facades\Facade;

class MarketHistoryFacade extends Facade {
    protected static function getFacadeAccessor() { return 'eveonline.market.history'; }
}

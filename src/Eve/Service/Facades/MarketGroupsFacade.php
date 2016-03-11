<?php

namespace EveOnlineBridge\Service\Facades;

use Illuminate\Support\Facades\Facade;

class MarketGroupsFacade extends Facade {
    protected static function getFacadeAccessor() { return 'eveonline.market.groups'; }
}

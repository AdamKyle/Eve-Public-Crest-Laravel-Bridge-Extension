<?php

namespace EveOnlineBridge\Service\Facades;

use Illuminate\Support\Facades\Facade;

class OrderFacade extends Facade {
    protected static function getFacadeAccessor() { return 'eveonline.market.orders'; }
}

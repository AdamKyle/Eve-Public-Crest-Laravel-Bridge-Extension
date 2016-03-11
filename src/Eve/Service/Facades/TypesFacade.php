<?php

namespace EveOnlineBridge\Service\Facades;

use Illuminate\Support\Facades\Facade;

class TypesFacade extends Facade {
    protected static function getFacadeAccessor() { return 'eveonline.market.types'; }
}

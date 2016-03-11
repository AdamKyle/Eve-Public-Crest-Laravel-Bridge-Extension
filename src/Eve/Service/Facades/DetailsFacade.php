<?php

namespace EveOnlineBridge\Service\Facades;

use Illuminate\Support\Facades\Facade;

class DetailsFacade extends Facade {
    protected static function getFacadeAccessor() { return 'eveonline.items.details'; }
}

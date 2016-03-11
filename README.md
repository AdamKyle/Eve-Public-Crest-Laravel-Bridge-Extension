# Eve Online Public Crest Laravel Bridge

This small library is a bridge between the [Eve Public Crest PHP Library](https://github.com/AdamKyle/EvePublicCrest) and the [Laravel Framework](https://laravel.com/). it is the continued efforts of the Eve Public Crest PHP Library.

## Installation:

`composer require eve-online-public-crest-bridge`

### Set Up

Register the provider:

```php
    'providers' => [

        ...

        EveOnlineBridge\Service\Provider\EverMarketProvider::class
    ],
```

Register any of the following facades:

```php
    'aliases' => [

        ...

        'EvePrices'       => EveOnlineBridge\Service\Facades\PricesFacade::class,
        'EveRegions'      => EveOnlineBridge\Service\Facades\RegionsFacade::class,
        'EveMarketGroups' => EveOnlineBridge\Service\Facades\MarketGroupsFacade::class,
        'EveItemDetails'  => EveOnlineBridge\Service\Facades\DetailsFacade::class,
        'EveRegionOrders' => EveOnlineBridge\Service\Facades\OrderFacade::class,
        'EveMarketTypes'  => EveOnlineBridge\Service\Facades\TypesFacade::class,
        'EveItemHistory'  => EveOnlineBridge\Service\Facades\MarketHistoryFacade::class
    ],
```

Thats it. You are all ready to go. Each of these services maps to a class that can be injected into a controller action
or called statically via: `EvePrices::fnName()`.

You can read the [Eve Online Public Crest README](https://github.com/AdamKyle/EvePublicCrest) to learn more about the library.

## Where are the tests?

Please see the [Eve Online Public Crest](https://github.com/AdamKyle/EvePublicCrest) for tests of the actual library.

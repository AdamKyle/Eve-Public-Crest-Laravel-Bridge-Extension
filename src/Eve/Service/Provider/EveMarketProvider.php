<?php

namespace EveOnlineBridge\Service\Provider;

use Illuminate\Support\ServiceProvider;

use EveOnline\Items\Details;
use EveOnline\Market\Groups\MarketGroups;
use EveOnline\Market\History\MarketHistory;
use EveOnline\Market\Orders\Order;
use EveOnline\Market\Prices\Prices;
use EveOnline\Market\Types\Types;
use EveOnline\Regions\Regions;
use GuzzleHttp\Client;

class EveMarketProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Create an instance of client.
        $client = new Client();

        $this->app->singleton('eveonline.items.details', function () {
            return new Details($client);
        });

        $this->app->singleton('eveonline.market.groups', function () {
            return new MarketGroups($client);
        });

        $this->app->singleton('eveonline.market.history', function () {
            return new MarketHistory($client);
        });

        $this->app->singleton('eveonline.market.orders', function () {
            return new Order($client);
        });

        $this->app->singleton('eveonline.market.prices', function () {
            return new Prices($client);
        });

        $this->app->singleton('eveonline.market.types', function () {
            return new Types($client);
        });

        $this->app->singleton('eveonline.regions', function () {
            return new Regions($client);
        });

        $this->app->alias('eveonline.items.details',  Details::class);
        $this->app->alias('eveonline.market.groups',  MarketGroups::class);
        $this->app->alias('eveonline.market.history', MarketHistory::class);
        $this->app->alias('eveonline.market.orders',  Order::class);
        $this->app->alias('eveonline.market.prices',  Prices::class);
        $this->app->alias('eveonline.market.types',   Types::class);
        $this->app->alias('eveonline.regions',        Regions::class);
    }

    public function provides()
    {
        return [
            Details::class,
            MarketGroups::class,
            MarketHistory::class,
            Order::class,
            Prices::class,
            Types::class,
            Regions::class
        ];
    }
}

<?php

namespace App\Providers;

use App\Analytics\Views;
use App\Analytics\Pageviews;
use App\Analytics\PageviewsCache;
use App\Services\Location\Locator;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use App\Services\Location\IpLocationLocator;
use App\Services\Location\IpDatabaseLocator;
use App\Factory\LocatorFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('firstNth', function ($take) {
            //$this
            //new static will return new instance of collection
            return new static(array_slice($this->items, 0, $take));
        });

        Filesystem::macro('make',function(){
            return $this->put($path,'');
        });


        $this->app->singleton(Locator::class , function($app){
            // switch ($app->make('config')->get('services.ip-locator')) {
            //     case 'api':
            //         return new IpLocationLocator;
            //         # code...
            //         break;
            //     case 'database':

            //         return new IpDatabaseLocator;
            //         break;
                
            //     default:
            //         # code...
            //         throw new \RuntimeException("Unknown IP Locator Service");
            //         break;
            // }
            $fatory = new LocatorFactory;
            return $fatory->make($app->make('config')->get('services.ip-locator'));
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Views::class, function($app){
            
            //return new Pageviews(auth()->user());
            
            return new PageviewsCache(
                new Pageviews(auth()->user())
            );
            
        });

    }
}

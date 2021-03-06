<?php

namespace App\Providers;

use App\Analytics\Views;
use App\Analytics\Pageviews;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use App\Analytics\PageviewsCache;

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

        // Filesystem::macro('make',function(){
        //     return $this->put($path,'');
        // });


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

<?php

namespace Laracasts;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Foundation\Console\Presets\Preset;

class LaracastsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('tailwinds',function($command){
            //$command->info('it is workding');
            Preset::install();
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

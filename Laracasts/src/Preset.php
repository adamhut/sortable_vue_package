<?php 

namespace Laracasts;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset
{
    
    public static function install()
    {
        static::cleanSassDirectory();
        static::updatePackages();
        static::updateMix();
        static::udpateScripts();
    }    

    public static function cleanSassDirectory()
    {
        File::cleanDirectory(resource_path('assets/sass'));
    }


    public static function updatePackageArray($packages)
    {
        return array_merge(['laravel-mix-tailwind'=>'^0.1.0'] ,Arr::except($packages,[
            'popper.js',
            'loadash',
            'jquery',
        ]));
        
    }

    public static function updateMix()
    {
        copy(__DIR__.'/stubs/webpack.mix.js',base_path('webpack.mix.js'));
    }

    public static function udpateScripts()
    {
        copy(__DIR__ . '/stubs/app.js', resource_path('app.js'));
        copy(__DIR__ . '/stubs/bootstrap.js', resource_path('bootstrap.js'));
    }
  
}
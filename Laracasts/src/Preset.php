<?php 

namespace Laracasts;

use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset
{
    
    public static function install()
    {
        File::cleanDirectory(resource_path('assets/sass'));
        

    }    
  
}
<?php 
namespace App\Services;

use Closure;


interface Pipe{

    public function handle($content, Closure $next);
    
}
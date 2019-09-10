<?php 
namespace App\Services;

use Closure;

class UpperFirstCharacter implements Pipe{
    
    public function handle($content ,Closure $next)
    {
        $content= ucfirst($content);

        return $next($content);
    }

}
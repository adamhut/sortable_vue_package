<?php 
namespace App\Services;

use Closure;


class RemoveWords implements Pipe{

    public function handle($content,Closure $next)
    {

        $content = str_replace('-',' ',$content);

        return $next($content);

    }

}
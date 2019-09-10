<?php 
namespace App\Filters;

use Closure;

class NameFilter{

    public function handle($payload,Closure  $next)
    {
        // echo class_basename($this) . '<br/>';
        [$request,$builder] = $payload;
        
        $builder->when($request->name,function($query) use($request){
            return $query->where('name','like', $request->name.'%');    
        });

        return $next([$request,$builder]);

    }
    
}
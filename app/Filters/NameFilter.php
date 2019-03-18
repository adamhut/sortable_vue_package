<?php 
namespace App\Filters;

use Closure;

class NameFilter{

    public function handle($payload,Closure  $next)
    {
        
        [$request,$builder] = $payload;
        
        $builder->when($request->name,function($query) use($request){
            return $query->where('eamil','like', $request->name.'@%');    
        });

        return $next(  [$request,$builder] );

    }
    
}
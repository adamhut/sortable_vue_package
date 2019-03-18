<?php 
namespace App\Filters;

use Closure;

class DomainFilter
{

    public function handle($payload, Closure  $next)
    {
        //$builder = ;

        [$request, $builder] = $payload;

        // /dd($request, $builder);

        $builder->when($request->domain, function ($query) use ($request) {
            return $query->where('email', 'like', '%@'.$request->domain);
        });

        return $next([$request, $builder]);
    }
}


<?php 

namespace App\Analytics;

use Cache;


class PageviewsCache implements Views{
    
    /**
     * next Decorator
     *
     * @var [type]
     */
    protected $next;

    /**
     * construct
     *
     * @param Views $next
     */
    public function __construct(Views $next)
    {
        $this->next = $next;
    }

    

    public function daysBack($days, $domain = null, $customer = null)
    {
        $minutes = 60;
        // User (me) , #days, domain, coustomer
        $cacheKey = md5(vsprintf('%s.%s.%s.%s', [
            auth()->user()->id,
            $days,
            $domain,
            $customer
        ]));

        return Cache::remember($cacheKey, now()->addMinutes($minutes), function () use ($days, $domain, $customer) {
            return $this->next->daysBack($days, $domain , $customer );
        });
    }

    public function domains()
    {
        $minutes = 60;
        $cacheKey = md5(vsprintf('%s.%s', [
            auth()->user()->id,
            'domains'
        ]));

        return Cache::remember($cacheKey, now()->addMinutes($minutes), function () use ($days, $domain, $customer) {
            return $this->next->domains();
        });
    }

}
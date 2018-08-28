<?php

namespace Adamhut\Providers;

use Illuminate\Support\ServiceProvider;
use Adamhut\app\Achievemnts\AdamhutMastery;
use Adamhut\app\Achievemnts\FirstThousandPoints;


class AchievementsServiceProvider extends ServiceProvider
{

    protected $achievements =[
        FirstThousandPoints::class,
        AdamhutMastery::class,
        
    ];

    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       

    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //resolve('achievement')
        $this->app->singleton('achievements',function(){
            return colelct($this->achievements)->map(function($achievement){
                return new $achievement;
            });
        });

        // $this->app->singleton(Achievements::class,function(){
            
        //     $achievements = new Achievements;

        //     $achievements->register('Moving On Up', function ($user) {
        //         return $user->getExperience()->points >= 1000;
        //     }, 'somg-badge.svg');
    
        //     $achievements->register('Laracast Mastery', function ($user) {
        //         return $user->getExperience()->points >= 0;
        //     }, 'somg-mastery-badge.svg');
        //     return $achievements;

        // });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Adamhut\Achievements\Achievements;

class AchievementsServiceProvider extends ServiceProvider
{
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

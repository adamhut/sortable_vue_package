<?php

namespace Adamhut\Achievements\Providers;

use Illuminate\Support\ServiceProvider;
use Adamhut\Achievemnts\Types\AdamhutMastery;
use Adamhut\Achievemnts\Types\FirstThousandPoints;
use Adamhut\Achievements\Console\GenerateAchievementCommand;


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
        \Event::listen(\Adamhut\Achievements\Events\UserEarnedExperience::class, \Adamhut\Achievements\Listeners\AwardAchievements::class); 
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

        $this->commands(GenerateAchievementCommand::class);
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

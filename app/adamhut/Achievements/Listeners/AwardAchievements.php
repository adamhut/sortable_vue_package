<?php

namespace Adamhut\Achievements\Listeners;


use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Adamhut\Achievements\Events\UserEarnedExperience;

class AwardAchievements
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserEarnedExperience  $event
     * @return void
     */
    public function handle(UserEarnedExperience $event)
    {
        $achievementIdsToAwardTheUser = app('achievements')->filter(function ($achievement) use ($event) {
            return $achievement->qualifier($event->user);
        })->map(function ($achievement) {
            return $achievement->modelKey();
        });

        $event->user->achievements()->sync($achievementIdsToAwardTheUser);
    }
}

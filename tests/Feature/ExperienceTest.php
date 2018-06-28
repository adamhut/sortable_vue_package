<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Events\UserEarnedExperience;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExperienceTest extends TestCase
{
    /** @test */
    public function an_announcement_is_made_when_experience_is_earned()
    {
        Event::fake();

        //put things in the montion
        $this->signIn();

        //when they complete a lesson
        $this->user->getExperience()->awardExperience(100);
        //$user->complete($this->makeLesson());
        
        
        Event::assertDispatched(UserEarnedExperience::class,function($event){
            
            return  auth()->user()->is($event->user) && $event->points == 100 && $event->totalPoints = 100 ;
        });

        
    }
    
    /** @test */
    public function a_user_earns_experisence_when_they_complete_lessons()
    {
        //Given I have a registered user
        $user= factory(User::class)->create();
        $this->signIn();

        //when they complete a lesson
        $user->complete($this->makeLesson());

        //Then experience should be awarded to their account
        $this->assertEquals(100,$this->userExperience());

    }

    protected function makeLesson()
    {
        
    }
    
    protected function userExperience()
    {
        
    }

}

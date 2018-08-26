<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AchievementsTest extends TestCase
{
    
    /** @test */
    public function an_achievement_is_unlocked_once_a_user_experience_points_pass_1000()
    {
        //create the world 
        $user =factory(User::class)->create();

        //when 
        $user->getExperience()->awardExperience(1001);

        //then..the user can unlock a new achievement.
        
        $this->assertCount(1,$user->achievements);

        //USER-ACHIEVEMENTS
        // user_id
        // achievement_id

        //ACHIEVEMENT
        // - id
        // - name 
        // - description => 'earn whe expericenc point pass 1000'
        // - icon //path to icon
         

    }


}

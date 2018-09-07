<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Adamhut\Achievements\Achievement;

class AchievementsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function an_achievement_is_unlocked_once_a_user_experience_points_pass_1000()
    {
        //create the world 
        $user =factory(User::class)->create();

        //when 
        $user->getExperience()->awardExperience(1001);

        //then..the user can unlock a new achievement.
        //$user->fresh()->achievements();

        //$this->assertCount(1, $user->fresh()->achievements());
        $this->assertCount(1,$user->fresh()->achievements);

        //USER-ACHIEVEMENTS
        // user_id
        // achievement_id

        //ACHIEVEMENT
        // - id
        // - name 
        // - description => 'earn whe expericenc point pass 1000'
        // - icon //path to icon
         
    }

    /** @test */
    public function a_user_can_be_assigned_any_achievement_badge()
    {
        //give we have a user
        $user = factory(User::classd)->create();
        //as well as a badge
        $achievement = factory(Achievement::class)->create();

        //if a badge is awarded to a user
        //$user->awardAchievement($achievement)
        $achievement->awardTo($user);

        //then it should be accessible throught the ->achievments relationship
        $this->assertCount(1,$user->achievements);

        $this->assertTrue($user->achievements[0]->is($achievement));

    }


    /** @test */
    public function achievement_can_be_seeded_for_all_users_as_a_console_command()
    {
        //given we have two users
        $users = factory(User::class,2)->create();

        //and those users qualify for one achievement
        $user[0]->getExperience->update(['points'=>1001]);
        $user[1]->getExperience->update(['points' => 1001]);

        $this->assertCount(0, $user[0]->achievements);
        $this->assertCount(0, $user[1]->achievements);
        
        //when we seed the achievements through the console command
        $this->artisan('adamhut:sync-user-achievements');

        //then those two users should have one achievement each in the pivot table
        $this->assertCount(1, $user[0]->achievements);
        $this->assertCount(1, $user[1]->achievements);

    }

}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AchievementsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_name()
    {
        $achievement = factory('Adamhut\Achievment')->create(['name'=>'some badge']);

        self::assertEquals('Some Badge',$achievement->name);
    }

    /** @test */
    public function it_has_a_description()
    {
        $achievement = factory('Adamhut\Achievment')->create(['description' => 'forbar description']);

        self::assertEquals('forbar description', $achievement->description);
    }
    
    /** @test */
    public function it_has_a_icon_path()
    {
        $achievement = factory('Adamhut\Achievment')->create(['icon' => 'some-icon.svg']);

        self::assertEquals('some-icon.svg', $achievement->icon);
    }

}



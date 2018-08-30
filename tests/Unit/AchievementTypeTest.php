<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Adamhut\Achievements\AchievementType;

class AchievementTypeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sets_a_default_name()
    {
        $type = new FakeAchievementType();

        $this->assertEquals('Fake Achievement Type' ,$type->name());
    }
}


class FakeAchievementType extends AchievementType
{
    public $description = 'dummy description';

    public $icon = 'dummy.svg';

    public function qualifier($user)
    {
        return true;
    }
}

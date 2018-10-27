<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\Location\Locator;

class LocalNewsTest extends TestCase
{
    /** @test */
    public function it_returns_only_local_news()
    {
        $this->app->instance(
            Locator::class,
            FakeLocator::returning(new Mark('Canada','Ontraio','city'))
        );


        $response = $this->get('/api/local-news');
        
        $response->assertStatus(Response::HTTP_OK);
        
        $response->assertStatus(200);
    }


}

class FakeLocator implements Locator{
   
    private $mark;

    public function __construct(Mark $mark)
    {
        $this->mark = $mark;
    }

    public static function returning(Mark $mark)
    {
        return new static($mark);
    }

    public function fromIp($ipAddress) : Mark
    {
        return $this->mark;
    }


}

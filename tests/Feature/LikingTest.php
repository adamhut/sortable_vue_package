<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use App\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LikingTest extends TestCase
{

    use RefreshDatabase;
    
    /** @test */
    public function a_post_can_be_liked()
    {
        $this->actingAs(factory(User::class)->create());

        $post = factory(Post::class)->create() ;

        $post->like();

        $this->assertCount(1,$post->likes);

        $this->assertTrue($post->likes->contains('id',auth()->user()->id));
    }

    /** @test */
    public function a_comment_can_be_liked()
    {
        $this->actingAs(factory(User::class)->create());

        $comment = factory(Comment::class)->create();

        $comment->like();

        $this->assertCount(1, $comment->likes);

        $this->assertTrue($comment->likes->contains('id', auth()->user()->id));
    }
}

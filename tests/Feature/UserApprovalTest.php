<?php

namespace Tests\Feature;

use App\User;
use App\Approval;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserApprovalTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_user_created_it_is_default_pending()
    {
        $user = factory(User::class)->create();

        $this->assertNull($user->approval);

        $this->assertTrue($user->isPending());
    }

    /** @test */
    public function a_user_can_be_approve()
    {
        $user = factory(User::class)->create();

        $this->assertNull($user->approval);

        $user->approve();

        $user = $user->fresh();
        $approval = $user->approval;
        //dd($approval);
        //$this->assertTrue($approval);
        $this->assertTrue($approval->approved);

        $this->assertTrue($user->isApproved());
        

    }

    /** @test */
    public function a_user_can_be_deny()
    {
        $user = factory(User::class)->create();

        $this->assertNull($user->approval);

        $user->deny();

        $user = $user->fresh();
        $approval = $user->approval;
        //dd($approval);
        //$this->assertTrue($approval);
        $this->assertFalse($approval->approved);

        $this->assertTrue($user->isDenied());
    }


    /** @test */
    public function it_return_all_approved_users()
    {
        $approvedUsers = factory(User::class,2)->create();

        $pendingUser = factory(User::class)->create();

        $deniedUser = factory(User::class)->create();

        $approvedUsers->each(function($user){$user->approve();});

        $deniedUser->deny();

        $users  = User::approved()->get();

        $this->assertCount(2,$users);

        $approvedUsers->each(function($approvedUser)  use($users){
            $this->assertTrue($users->contains($approvedUser));
        });
    }

    /** @test */
    public function it_return_all_denied_users()
    {
        $approvedUsers = factory(User::class, 2)->create();

        $pendingUser = factory(User::class)->create();

        $deniedUser = factory(User::class)->create();

        $approvedUsers->each(function ($user) {
            $user->approve();
        });

        $deniedUser->deny();

        $users = User::denied()->get();

        $this->assertCount(1, $users);

        $this->assertTrue( $users->contains($deniedUser));
    }

    /** @test */
    public function it_return_all_pending_users()
    {
        $approvedUsers = factory(User::class, 2)->create();

        $pendingUser = factory(User::class)->create();

        $deniedUser = factory(User::class)->create();

        $approvedUsers->each(function ($user) {
            $user->approve();
        });

        $deniedUser->deny();

        $users = User::pending()->get();
        
        $this->assertCount(1, $users);

        $this->assertTrue($users->contains($pendingUser));
    }

    /** @test */
    public function it_return_all_users_with_decision()
    {
        $approvedUsers = factory(User::class, 2)->create();

        $pendingUser = factory(User::class)->create();

        $deniedUser = factory(User::class)->create();

        $approvedUsers->each(function ($user) {
            $user->approve();
        });

        $deniedUser->deny();

        $users = User::withDecision()->get();

        dd($users);
        $this->assertCount(4, $users);

        // /$this->assertTrue($users->contains($pendingUser));
    }

    
}

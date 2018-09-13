<?php
namespace Adamhut\Achievements;

use App\User;
use Illuminate\Database\Eloquent\Collection;


class Achievements extends Collection
{
	
    public function forUser($user)
    {
        return $user->achievements;
    }

    public function remianingFor($user)
    {
        
    }

    public function expert()
    {
        
    }

}

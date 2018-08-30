<?php
namespace Adamhut\Achievements;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Achievement extends Model{
    
    protected $guarded=[];


    public function awardTo(User $user)
    {
        $this->users()->attach($user);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'user_achivements');
    }

}
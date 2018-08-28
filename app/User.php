<?php

namespace App;

use App\Experience;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Adamhut\Achievement;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getExperience()
    {
        return $this->hasOne(Experience::class);
    }

    /**
     * Confirm the user account
     *
     * @return void
     */
    public function confirm()
    {
        $this->trusted = true;
        $this->confirmation_token = null;

        $this->save();
    }


    public function achievements()
    {
        // $achievements = resolve(Achievements::class)->filter(function($achievement){
        //     return call_user_func($achievement->handler,$this);
        // });
        // return $achievements;
        return $this->belongsToMany(Achievement::class, 'user_achivements')->withTimestamps();
    }
}

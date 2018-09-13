<?php
namespace Adamhut\Achievements;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Achievement extends Model{
    
    /**
     * Attributes to guard
     *
     * @var array
     */
    protected $guarded=[];


    
    public function awardTo(User $user)
    {
        $this->users()->attach($user);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'user_achivements');
    }

    public function newCollection(array $models=[])
    {
        return new Achievements($models);
    }

}
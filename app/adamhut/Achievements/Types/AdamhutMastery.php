<?php 
namespace Adamhut\Achievemnts\Types;


class AdamhutMastery extends AchievementType
{
    
    public $icon = 'master-badge.svg';    

    public function qualifier($user)
    {
        return $user->experience->points >= 10000;
        return $user->completions()->count() > 50;
    }    

    public function dscription()
    {
        return 'You have finish your learning.';
    }
}
<?php 
namespace Adamhut\Achievemnts\Types;

use Adamhut\Achievement;

class AdamhutMastery extends AchievementType
{
    public $description = 'You have finish your learning.';

    public $icon = 'master-badge.svg';    

    public function qualifier($user)
    {
        return $user->experience->points >= 10000;
        return $user->completions()->count() > 50;
    }    
}
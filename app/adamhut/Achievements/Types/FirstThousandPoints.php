<?php 
namespace Adamhut\Achievemnts\Types;


class FirstThousandPoints extends AchievementType{

    public $name = "First Thousand Points";

    public $description ='Great job! Your ara on your way.';
    
    public $icon ='first-thousand-points.svg';
    
    
    public function qualifier($user)
    {
        return $user->experience->points >= 1000;
        
    }
}
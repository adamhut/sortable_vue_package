<?php 
namespace Adamhut\Achievemnts\Types;


class TopTenUser extends AchievementType
{
    public $description = '';

    public $icon = '';    

    public function qualifier()
    {

    }

    public function dscription()
    {
        return 'Great job! Your ara Top 10.';
    }
}
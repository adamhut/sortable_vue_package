<?php 
namespace Adamhut\Achievemnts\Types;


class FirstCompletetion extends AchievementType
{
    public $description = '';

    public $icon = '';    

    public function qualifier()
    {

    }

    public function dscription()
    {
        return 'You have finish your learning.';
    }
}
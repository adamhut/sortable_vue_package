<?php 
namespace Adamhut\Achievements;

use Illuminate\Support\Collection;


class Achievements extends Collection{
    
    public function register($name,$handler,$icon )
    {
        $this->push(
            (object) compact('name','handler','icon')
        );
    }



}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\UserEarnedExperience;

class Experience extends Model
{
    //


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function awardExperience($points)
    {
        $this->increment('points',$points);

        UserEarnedExperience::dispatch($this->user(),$points,$this->points);

        return $this;
    }


    public function stripExperience($point)
    {
        $this->points -= $point;
        
        if($this->points <=0)
        {
            $this->points = 0;
        }

        $this->save();

        return $this;
    }
}

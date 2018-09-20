<?php
namespace App;

use App\Approval;

trait Approvable
{

    public function approve()
    {
        if ($this->approval) {
            $this->approval->approved = true;
            $this->approval->save();
            return $this;
        }
        $this->approval()->create([
            // 'staff_id' => auth()->check() ? auth()->user()->id : 1,
            'staff_id' => 1,
            'approved' => true,
            'remark' => request()->has('remark') ? request()->get('remark') : '',
        ]);
        return $this;
    }

    public function deny()
    {
        if ($this->approval) {
            $this->approval->approved = false;
            $this->approval->save();
            return $this;
        }

        $this->approval()->create([
            // 'staff_id' => auth()->check() ? auth()->user()->id : 1,
            'staff_id' => 1,
            'approved' => false,
            'remark' => request()->has('remark') ? request()->get('remark') : '',
        ]);
        return $this;
    }

    public function isApproved()
    {
        return $this->approval && $this->approval->approved == true;
    }

    public function isDenied()
    {
        return $this->approval && $this->approval->approved == false;
    }

    public function isPending()
    {
        // /dd($this->approval);
        return ! $this->approval;
    }


    public function approval()
    {
        return $this->morphOne(Approval::class, 'approvable');
        
        //return $this->morphTo(Approval::class, 'approvable');
    }


    public function scopeApproved($query){

        return $query->whereHas('approval', function ($query) {
            $query->where('approved', true);
        });

        // $class = addslashes(__class__);
        // $sub = \DB::raw("(select approvable_id, approved from approvals where approved=1 and  approvable_type = '" . $class . "') `approval`");

        // $table = $this->getTable();
        
        // return $query->join($sub, $table . '.id', '=', "approval.approvable_id")->orderBy('updated_at', 'desc');
    }

    public function scopeDenied($query)
    {
        return $query->whereHas('approval',function($query){
            //$query->where('approved',false);
            $query->denied();
        });

        // $class = addslashes(__class__);
        // $sub = \DB::raw("(select approvable_id, approved from approvals where approved=0 and  approvable_type = '" . $class . "') `approval`");

        // $table = $this->getTable();
        // return $query->join($sub, $table . '.id', '=', "approval.approvable_id")->orderBy('updated_at', 'desc');

    }


    public function scopePending($query)
    {

        return $query->whereDoesntHave('approval');

        // $table = $this->getTable();
        // //dd($table, addslashes(__class__));
        // return $query->leftJoin('approvals', function ($join) use ($table) {
        //         $model = __CLASS__;
        //         //$model = addslashes(__class__);
        //         $join->on($table . '.id', '=', "approvals.approvable_id");
        //         $join->on("approvals.approvable_type", "=", \DB::raw("'{$model}'"));
        //     })
        //     ->selectRaw("{$table}.*")
        //     ->whereNull('approvals.id');
    }

    public function scopeWithDecision($query)
    {
        return $query->with('approval');

        $table = $this->getTable();

        return $query->leftJoin('approvals', function ($join) use ($table) {
            $model = __class__;
            //$model = addslashes(__class__);
            $join->on($table . '.id', '=', "approvals.approvable_id");
            $join->on("approvals.approvable_type", "=", \DB::raw("'{$model}'"));
        })
        ->selectRaw("{$table}.*,IFNULL(approvals.approved,null) decision,IFNULL(approvals.id,null) approval_id");
    }

}

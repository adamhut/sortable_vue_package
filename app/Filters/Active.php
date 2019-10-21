<?php 
namespace App\Filters;


class Active implements Filter{

    protected function applyFilter($builder)
    {
        // return $builder->where('active',request('active'));
        
        return $builder->where($this->filterName(), request($this->filterName()));
    }
    
}
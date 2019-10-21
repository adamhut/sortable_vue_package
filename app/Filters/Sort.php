<?php

namespace App\Filters;


class Sort implements Filter
{

    protected function applyFilter($builder)
    {

        return $builder->orderBy('title', request($this->filterName()));
    }
}

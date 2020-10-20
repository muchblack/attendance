<?php

namespace App\Repositories;

use App\Dept;

class DeptRepository
{
    public function __construct(Dept $dept)
    {
        $this->dept = $dept;
    }


    public function get_depts()
    {
        $depts = $this->dept->where('is_show',1)->get()->toArray();

        return $depts;
    }

    public function get_dept($idx)
    {
        $dept = $this->dept->where('idx',$idx)->get()->first()->toArray();

        return $dept;
    }
}

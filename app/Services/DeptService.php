<?php

namespace App\Services;

use App\Repositories\DeptRepository;

class DeptService
{
    public function __construct(DeptRepository $depts)
    {
        $this->depts = $depts;
    }

    public function get_depts()
    {
        $depts = $this->depts->get_depts();
        return $depts;
    }

    public function get_dept($idx)
    {
        $depts = $this->depts->get_dept($idx);

        return $depts;
    }
}

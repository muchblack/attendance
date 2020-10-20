<?php

namespace App\Repositories;

use App\LeaveType;

class LeaveSetRepository
{
    public function __construct(LeaveType $leaveType)
    {
        $this->leavetype = $leaveType;
    }

    public function get_leaveset()
    {
        $leavesets = $this->leavetype->get()->toArray();

        return $leavesets;
    }

    public function get_single_leaveset($idx)
    {
        $leaveset = $this->leavetype->where('idx',$idx)->get()->first()->toArray();

        return $leaveset;
    }

    public function add_leaveset($params)
    {
        $result = $this->leavetype->insert($params);
        if($result)
        {
            return true;
        }
        return false;

    }

    public function modify_leaveset($params,$idx)
    {
        $result = $this->leavetype->where(['idx'=>$idx])->update($params);

        if($result)
        {
            return true;
        }

        return false;
    }
}

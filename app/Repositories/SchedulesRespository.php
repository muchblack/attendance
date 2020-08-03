<?php
namespace App\Repositories;

use App\Schedules;
use Facade\Ignition\Support\Packagist\Package;

class SchedulesRespository
{

    public function __construct(Schedules $schedules)
    {
        $this->schedules = $schedules;
    }

    public function get_schedules()
    {
        $schedules = $this->schedules->where('delete_flag',0)->get()->toArray();

        return $schedules;
    }

    public function get_single_schedules($idx)
    {
        $schedules = $this->schedules->where('idx',$idx)->get()->first()->toArray();

        return $schedules;
    }

    public function add_schedules($params)
    {
        $result = $this->schedules->insert($params);
        if($result)
        {
            return true;
        }
        return false;

    }

    public function modify_schedules($params,$idx)
    {
        $result = $this->schedules->where(['idx'=>$idx])->update($params);

        if($result)
        {
            return true;
        }

        return false;
    }

    public function delete_schedules($idx)
    {
        $result = $this->schedules->where('idx',$idx)->update(['delete_flag' => 1 ]);
        if($result)
        {
            return true;
        }
        return false;
    }
}

<?php
namespace App\Services;


use App\Repositories\SchedulesRespository;
use Illuminate\Http\Request;

class SchedulesService
{
    public function __construct(SchedulesRespository $schedulesRespository)
    {
        $this->schedules = $schedulesRespository;
    }

    //列出全部班表
    public function get_all_schedules()
    {
        $schedules = $this->schedules->get_schedules();

        return $schedules;
    }

    //列出單一筆班表修改
    public function get_single_schedules($idx)
    {
        $schedules = $this->schedules->get_single_schedules($idx);

        return $schedules;

    }

    //增加新的班表
    public function modify_schedules($params)
    {
        $work_start = $params['work_start_hour'].":".$params['work_start_mins'];
        $work_end = $params['work_end_hour'].":".$params['work_end_mins'];
        $datas = [
            'schedule_name' => $params['schedule_name'],
            'schedule_start' => $work_start,
            'schedule_end' => $work_end,
            'schedule_buffer' => $params['schedule_buffer'],
        ];
        if(isset($params['idx']))
        {
            $result = $this->schedules->modify_schedules($datas,$params['idx']);
        }
        else
        {
            $result = $this->schedules->add_schedules($datas);
        }

        return $result;
    }

    //軟刪除一個班表
    public function soft_delete_schedules($idx)
    {
        $result = $this->schedules->delete_schedules($idx);
        if($result)
        {
            return true;
        }
        return false;

    }
}

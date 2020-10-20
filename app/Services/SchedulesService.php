<?php
namespace App\Services;


use App\Repositories\DeptRepository;
use App\Repositories\SchedulesRespository;
use Illuminate\Http\Request;

class SchedulesService
{
    public function __construct(
        SchedulesRespository $schedulesRespository,
        DeptRepository $depts
    )
    {
        $this->schedules = $schedulesRespository;
        $this->depts = $depts;
    }

    //列出全部班表
    public function get_all_schedules()
    {
        $schedules = $this->schedules->get_schedules();
        foreach ($schedules as &$item )
        {
            $item['schedule_start'] = $item['schedule_start_hour'].":".$item['schedule_start_min'];
            $item['schedule_end'] = $item['schedule_end_hour'].":".$item['schedule_end_min'];

            $dept = $this->depts->get_dept($item['dept_idx']);
            $item['dept_name'] = $dept['dept_name'];
        }

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
        $datas = [
            'schedule_name' => $params['schedule_name'],
            'schedule_start_hour' => $params['work_start_hour'],
            'schedule_start_min' => $params['work_start_mins'],
            'schedule_end_hour' => $params['work_end_hour'],
            'schedule_end_min' => $params['work_end_mins'],
            'schedule_buffer' => $params['schedule_buffer'],
            'dept_idx' => $params['dept_idx'],
            'delete_flag' => 0,
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

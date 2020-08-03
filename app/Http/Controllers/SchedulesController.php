<?php
/*
 * 班別相關
 */
namespace App\Http\Controllers;

use App\Services\SchedulesService;
use Illuminate\Http\Request;


class SchedulesController extends Controller
{
    public function __construct(
        SchedulesService $schedulesService,
        Request $request
    )
    {
        $this->schedules = $schedulesService;
        $this->request = $request;
    }

    //員工班表總覽
    public function index()
    {
        //取得全部班表
        $schedules = $this->schedules->get_all_schedules();

        $data = [
            'title'=> '班表管理',
            'schedules' => $schedules,
            'user' => $this->request->session()->get('user'),
        ];

        return view('schedules.schedules',$data);
    }

    //新增員工班表
    public function add_schedules()
    {
        $data = [
            'title'=> '新增班表',
            'user' => $this->request->session()->get('user'),
        ];

        return  view('schedules.add',$data);
    }

    public function add_schedules_actions()
    {
        $params = $this->request->post();
        $result = $this->schedules->modify_schedules($params);
        if($result)
        {
            return redirect(route('schedules.show'))->with('status','新增班表更新!');
        }
        else
        {
            return redirect(route('schedules.show'))->with('status','班表更新失敗!');
        }

    }

    //修改員工班表
    public function modify_schedules($idx)
    {
        $signle_schedules = $this->schedules->get_single_schedules($idx);

        //時間分割
        $start_time = explode(':',$signle_schedules['schedule_start']);
        $end_time = explode(':',$signle_schedules['schedule_end']);

        $data = [
            'title' => '班表修改',
            'schedules' => $signle_schedules,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'user' => $this->request->session()->get('user')
        ];
        return view('schedules.edit',$data);
    }

    public function modify_schedules_actions()
    {
        $params = $this->request->post();
        $result = $this->schedules->modify_schedules($params);
        if($result)
        {
            return redirect(route('schedules.show'));
        }
    }

    public function delete_schedules_actions($idx)
    {
        $result = $this->schedules->soft_delete_schedules($idx);
        if($result)
        {
//            return redirect(route('schedules.show'));
            return redirect(route('schedules.show'))->with('status','班表刪除成功!');
        }
    }

}

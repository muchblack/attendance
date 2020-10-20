<?php
namespace App\Http\Controllers;

use App\Services\LeaveSetService;
use Illuminate\Http\Request;

class LeaveSetController extends Controller
{
    public function __construct(
        LeaveSetService $leaveset,
        Request $request
    )
    {
        $this->leaveset = $leaveset;
        $this->request = $request;
    }

    public function index()
    {
        //取得全部班表
        $leavesets = $this->leaveset->get_all_leaveset();

        $data = [
            'title'=> '假別管理',
            'leavesets' => $leavesets,
            'user' => $this->request->session()->get('user'),
        ];

        return view('leaveset.leaveset',$data);
    }

    public function add_leaveset()
    {
        $data = [
            'title'=> '新增請假類別',
            'user' => $this->request->session()->get('user'),
        ];

        return  view('leaveset.add',$data);
    }

    public function add_leaveset_action()
    {
        $params = $this->request->post();
        $result = $this->leaveset->modify_leaveset($params);
        if($result)
        {
            return redirect(route('leaveset.show'))->with('status','請假類別更新成功!');
        }
        else
        {
            return redirect(route('leaveset.show'))->with('status','請假類別更新失敗!');
        }
    }

    //修改員工班表
    public function modify_leaveset($idx)
    {
        $signle_leaveset = $this->leaveset->get_single_leaveset($idx);

        $data = [
            'title' => '假別修改',
            'leaveset' => $signle_leaveset,
            'user' => $this->request->session()->get('user')
        ];
        return view('leaveset.edit',$data);
    }

    public function modify_leaveset_actions()
    {
        $params = $this->request->post();
        $result = $this->leaveset->modify_leaveset($params);
        if($result)
        {
            return redirect(route('leaveset.show'));
        }
    }
}

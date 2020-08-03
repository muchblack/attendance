<?php
/*
 * 主頁面
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function __construct(
        Request $request
    )
    {
        $this->request = $request;
    }

    public function index()
    {
        $data = [
            'title'=> '出缺勤管理系統主頁面',
            'company_name' => env('COMPANY_NAME')."公司出缺勤管理系統",
            'user' => $this->request->session()->get('user'),
        ];
        return view('index',$data);
    }
}

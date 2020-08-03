<?php
/*
 * 登入用
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LaborsService;


class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(LaborsService $LaborsService)
    {
        $this->laborsService = $LaborsService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'title'=> '員工登入',
            'company_name' => env('COMPANY_NAME')."公司出缺勤管理系統"
        ];
        return view('login',$data);
    }

    public function labor_login(Request $request)
    {
        $result = $this->laborsService->check_labor($request->Account,$request->Passwd);
//        dd($result);
        if($result)
        {
            return redirect(route('mainpage'));
        }
        else
        {
            return redirect(route('loginpage'));
        }
    }
}

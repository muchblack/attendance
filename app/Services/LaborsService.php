<?php
namespace App\Services;

use App\Repositories\LaborsRepository;
use Illuminate\Http\Request;

class LaborsService
{
    public function __construct(
        LaborsRepository $laborsRepository,
        Request $request
    )
    {
        $this->labors = $laborsRepository;
        $this->request = $request;
    }

    public function check_labor($account,$passwd)
    {
        $labor = $this->labors->getLabor($account, $passwd);
        if ($labor) {
            $user = [
                'uid' => $labor['idx'],
                'name' => $labor['labor_name'],
                'email' => $labor['labor_email'],
                'dept' => $labor['labor_dept'],
                'dept_level' => $labor['labor_dept_level']
            ];
            $this->request->session()->put('user',$user);
            $this->request->session()->save();
//            dd(session('user'));
            return true;
        }
        else
        {
            return false;
        }
    }
}


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

    }
}

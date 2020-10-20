<?php
namespace App\Http\Controllers;

class DeptController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('dept.deptset');
    }
}

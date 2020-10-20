<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    protected $table = "atten_leave_type";
    protected $primaryKey = 'idx';
    public $timestamps = true;
}

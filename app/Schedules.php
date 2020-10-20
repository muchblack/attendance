<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table = "atten_schedules";
    protected $primaryKey = 'id';
    public $timestamps = true;
}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $table = "atten_dept";
    protected $primaryKey = 'idx';
    public $timestamps = true;
}

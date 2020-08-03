<?php
/*
 *
 */
namespace App\Repositories;

use App\Labors;
use Illuminate\Support\Facades\Hash;

class LaborsRepository
{
    public function __construct(Labors $labors)
    {
        $this->labors = $labors;
    }

    public function getLabor($account,$passwd )
    {

        $labor = $this->labors
            ->where('labor_account',$account)
            ->first()
            ->toArray();
        if(Hash::check($passwd,$labor['labor_passwd']) && $labor['is_resign'] == 0 )
        {
            return $labor;
        }
        else
        {
            return false;
        }
    }
}

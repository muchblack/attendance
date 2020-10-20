<?php

namespace App\Services;

use App\Repositories\LeaveSetRepository;

class LeaveSetService
{
    public function __construct(LeaveSetRepository $leaveSetRepository)
    {
        $this->leaveset = $leaveSetRepository;
    }

    //列出全部班表
    public function get_all_leaveset()
    {
        $leavesets = $this->leaveset->get_leaveset();
        foreach($leavesets as &$item)
        {
            if($item['is_signoff'] == 1 )
            {
                $item['is_signoff_show'] = '需要主管簽核';
            }
            else
            {
                $item['is_signoff_show'] = '不需要主管簽核';
            }

            if($item['is_prove'] == 1 )
            {
                $item['is_prove_show'] = '需要檢附證明';
            }
            else
            {
                $item['is_prove_show'] = '不需要檢附證明';
            }
        }

        return $leavesets;
    }

    //列出單一筆班表修改
    public function get_single_leaveset($idx)
    {
        $leaveset = $this->leaveset->get_single_leaveset($idx);

        $leaveset['is_signoff_on_flag'] = '';
        $leaveset['is_signoff_off_flag'] = '';
        $leaveset['is_prove_on_flag'] = '';
        $leaveset['is_prove_off_flag'] = '';

        if($leaveset['is_signoff'] == 1 )
        {
            $leaveset['is_signoff_on_flag'] = 'checked';
        }
        else
        {
            $leaveset['is_signoff_off_flag'] = 'checked';
        }

        if($leaveset['is_prove'] == 1 )
        {
            $leaveset['is_prove_on_flag'] = 'checked';
        }
        else
        {
            $leaveset['is_prove_off_flag'] = 'checked';
        }


        return $leaveset;

    }

    //增加新的班表
    public function modify_leaveset($params)
    {
        $datas = [
            'leave_name' => $params['leave_name'],
            'is_signoff' => $params['is_signoff'],
            'is_prove' => $params['is_prove'],
        ];
        if(isset($params['idx']))
        {
            $result = $this->leaveset->modify_leaveset($datas,$params['idx']);
        }
        else
        {
            $result = $this->leaveset->add_leaveset($datas);
        }

        return $result;
    }
}

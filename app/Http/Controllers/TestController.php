<?php
/*
 * 主頁面
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\TypeResolver;

class TestController extends Controller
{
    public function __construct(
        Request $request
    )
    {
        $this->request = $request;
    }

    public function index()
    {
        $array = [
            [
                'id'=>1 ,
                'name' => 'jack',
            ],
            [
                'id'=>2 ,
                'name' => 'john',
            ],
            [
                'id'=>3 ,
                'name' => 'sue',
            ]
        ];

        $array2 = [];
        var_dump(is_null($array2));
        foreach ($array as $item)
        {

        }
        for($i=1;$i<=9;$i++)
        {
            for($j=1;$j<=9;$j++)
            {
                echo "result = " .$i ." x " .$j ." = " .$i*$j ."<BR>";
            }
        }
    }
}

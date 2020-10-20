<?php

use Illuminate\Database\Seeder;

class deptseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
            [
                'dept_name' => '超級使用者',
                'is_show' => '0'
            ],
            [
                'dept_name' => '公司管理者',
                'is_show' => '0'
            ],
            [
                'dept_name' => '人事部',
                'is_show' => '1'
            ],
            [
                'dept_name' => '技術部',
                'is_show' => '1'
            ],
            [
                'dept_name' => '會計部',
                'is_show' => '1'
            ],
        ];
        DB::table('atten_dept')->insert($datas);
    }
}

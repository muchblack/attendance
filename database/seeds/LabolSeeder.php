<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LabolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atten_labors')->insert([
            'labor_number' => env('LABOR_NUMBER_PREFIX').str_pad('1',8,0,STR_PAD_LEFT),
            'labor_name' => 'root',
            'labor_account' => 'root',
            'labor_passwd' => Hash::make('root'),
            'labor_tel' => '0910123456',
            'labor_dept' => '1',
            'labor_dept_level' => '0',
        ]);
    }
}

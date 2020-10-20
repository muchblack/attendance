<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScheduleBuffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atten_schedules', function (Blueprint $table) {
            //
            $table->integer('schedule_buffer')->after('delete_flag')->comment('緩衝時間');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atten_schedules', function (Blueprint $table) {
            //
        });
    }
}

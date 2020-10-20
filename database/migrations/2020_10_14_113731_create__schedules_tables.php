<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_name',20)->comment('班表名稱');
            $table->string('schedule_start_hour',20)->comment('班表起始時間（小時）');
            $table->string('schedule_start_min',20)->comment('班表起始時間（分）');
            $table->string('schedule_end_hour',20)->comment('班表結束時間(小時)');
            $table->string('schedule_end_min',20)->comment('班表結束時間(分)');
            $table->integer('delete_flag')->comment('軟刪除指標');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atten_schedules');
    }
}

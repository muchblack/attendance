<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttenLeave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_leave', function (Blueprint $table) {
            $table->bigIncrements('idx')->comment('流水編號');
            $table->string('labor_idx',20)->comment('員工流水編號');
            $table->string('leave_type_idx',20)->comment('假種流水編號');
            $table->text('leave_content')->comment('請假理由');
            $table->datetime('leave_start')->comment('請假開始時間');
            $table->datetime('leave_end')->comment('請假結束時間');
            $table->integer('leave_day')->comment('請假總天數');
            $table->float('leave_hour',2,2)->comment('請假總時數');
            $table->string('proxy_labor_idx',20)->comment('代理人員工流水編號');
            $table->integer('is_proxy')->comment('代理人是否簽核');
            $table->integer('is_supervisor')->comment('主管是否簽核');
            $table->integer('is_boss')->comment('總經理/副總是否簽核');
            $table->integer('leave_actions')->comment('流程紀錄');
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
        Schema::dropIfExists('atten__leave');
    }
}

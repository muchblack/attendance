<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttenLeaveLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_leave_log', function (Blueprint $table) {
            $table->bigIncrements('idx')->comment('流水編號');
            $table->string('leave_idx')->comment('假單流水編號');
            $table->string('labor_idx')->comment('員工流水編號');
            $table->string('leave_action')->comment('動作');
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
        Schema::dropIfExists('atten_leave_log');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttenLeaveType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_leave_type', function (Blueprint $table) {
            $table->bigIncrements('idx')->comment('流水編號');
            $table->string('leave_name',20)->comment('假別');
            $table->integer('is_signoff')->comment('是否需要經理簽核');
            $table->integer('is_prove')->comment('是否需要證明');
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
        Schema::dropIfExists('atten_leave_type');
    }
}

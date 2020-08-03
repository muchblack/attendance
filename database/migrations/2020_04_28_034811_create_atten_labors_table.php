<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttenLaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_labors', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->bigIncrements('idx')->comment('流水編號');
            $table->string('labor_number',20)->comment('員工編號');
            $table->string('labor_name',20)->comment('員工姓名');
            $table->string('labor_account',20)->comment('員工帳號');
            $table->string('labor_passwd',50)->comment('登入密碼');
            $table->string('labor_tel',20)->comment('員工電話');
            $table->string('labor_dept',50)->comment('員工部門');
            $table->string('labor_dept_level',10)->comment('員工部門身份 0:超級管理者 1:老闆 2:總經理/副總經理 3:主管 4:一般');
            $table->integer('is_resign',10)->comment('是否離職(1離職 0在職')->default(0);
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
        Schema::dropIfExists('atten_labors');
    }
}

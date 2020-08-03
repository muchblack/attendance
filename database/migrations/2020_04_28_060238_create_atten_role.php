<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttenRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_role', function (Blueprint $table) {
            $table->bigIncrements('idx')->comment('流水編號');
            $table->string('labor_idx',20)->comment('員工流水編號');
            $table->string('role_type_idx',20)->comment('功能流水編號');
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
        Schema::dropIfExists('atten_role');
    }
}

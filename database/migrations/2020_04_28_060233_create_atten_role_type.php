<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttenRoleType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atten_role_type', function (Blueprint $table) {
            $table->bigIncrements('idx')->comment('流水編號');
            $table->string('role_name',20)->comment("名稱");
            $table->string('role_path',200)->comment('功能路徑');
            $table->string('role_features',20)->comment('許可功能');
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
        Schema::dropIfExists('atten_role_type');
    }
}

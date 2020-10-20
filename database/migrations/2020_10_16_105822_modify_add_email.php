<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAddEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atten_labors', function (Blueprint $table) {
            //
            $table->string('labor_email',100)->after('is_resign')->comment('員工電子郵件');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atten_labors', function (Blueprint $table) {
            //
        });
    }
}

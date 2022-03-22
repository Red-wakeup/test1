<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('beetle_id'); //關聯品種資料
            $table->string('parents_info'); //親代資訊
            $table->string('generations_info'); //累代資訊
            $table->string('origin'); //產地
            $table->string('status'); //狀態
            $table->string('food'); //耗材
            $table->string('change_cycle'); //更換週期
            $table->string('temperature'); //飼養溫度
            $table->string('source'); //來源

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record');
    }
}

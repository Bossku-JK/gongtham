<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGongthamSheetInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gongtham_sheet_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname',100);
            $table->string('position',100);
            $table->string('phone',10);
            $table->string('memo',150);
            // $table->mediumInteger('ss_id');
            $table->unsignedmediumInteger('ss_id');
            $table->foreign('ss_id')->references('id')->on('ss')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('gongtham_sheet_infos');
    }
}

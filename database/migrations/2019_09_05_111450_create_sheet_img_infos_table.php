<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetImgInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet_img_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img_name',100);
            $table->unsignedbigInteger('type_sheet_id');
            $table->foreign('type_sheet_id')->references('id')->on('type_of_sheets')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedbigInteger('gongtham_sheet_info_id');
            $table->foreign('gongtham_sheet_info_id')->references('id')->on('gongtham_sheet_infos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sheet_img_infos');
    }
}

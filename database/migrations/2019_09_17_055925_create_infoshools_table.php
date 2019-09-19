<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoshoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoshools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shoolcode',10);
            $table->string('shoolname',150);
            $table->string('techer1',150);
            $table->string('techer2',150)->nullable();
            $table->string('phone1',10);
            $table->string('phone2',10)->nullable();
            $table->string('email',150);
            $table->string('tambon',150);
            $table->string('District',150);
            $table->string('province',150);
            $table->string('zipcode',150);
            $table->string('year',4);
            $table->string('file',150);
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
        Schema::dropIfExists('infoshools');
    }
}

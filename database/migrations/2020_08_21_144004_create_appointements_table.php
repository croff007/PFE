<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientname');
            $table->string('patientlastname');
            $table->string('adress');
            $table->string('dateofbirth');
            $table->date('date');
            $table->integer('doctorid');
            $table->text('desc');
            
            $table->string('state')->nullable();
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
        Schema::dropIfExists('appointements');
    }
}

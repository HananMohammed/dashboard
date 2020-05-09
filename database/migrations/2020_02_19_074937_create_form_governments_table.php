<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormGovernmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_governments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sector_name');
            $table->string('person_name');
            $table->string('email');
            $table->string('city');
            $table->string('phone');
            $table->string('car_id');
            $table->string('car_name');
            $table->string('text');
            $table->string('created_by');
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
        Schema::dropIfExists('form_governments');
    }
}

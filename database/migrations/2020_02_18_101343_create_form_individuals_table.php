<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_individuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('city');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('text');
            $table->string('car_name');
            $table->string('car_id');
             $table->string('created_by')->nullable();
            $table->string('email')->nullable();
            $table->string('select_work_selector')->nullable();
            $table->string('salary_transferring_bank')->nullable();
            $table->string('select_monthly_obligations')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('total_monthly_obligations')->nullable();
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
        Schema::dropIfExists('form_individuals');
    }
}

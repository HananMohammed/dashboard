<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_activity')->nullable();
             $table->string('dealing_banks')->nullable();
            $table->string('phone_number');
            $table->string('type');
            $table->string('city');
            $table->string('age_of_company')->nullable();
            $table->string('responsible_person_name');
            $table->string('email')->nullable();
            $table->bigInteger('car_id');
            $table->text('text');
            $table->bigInteger('commercial_registration_no');
            $table->string('created_by')->nullable();

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
        Schema::dropIfExists('form_companies');
    }
}

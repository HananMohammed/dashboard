<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id');
            $table->bigInteger('class_id');
            $table->integer('price');
            $table->string('is_available');
            $table->string('car_name_en');
            $table->string('car_name_ar');
            //$table->text('short_description_en');
            //$table->text('short_description_ar');
//            $table->text('description_en');
//            $table->text('description_ar');
//            for ($i=0;$i<12;$i++){
//                $table->string('mon_'.($i+1))->nullable();
//            }
            $table->string('Option_en');
            $table->string('Option_ar');
            $table->dateTime('Year');
            $table->string('Transmission_en');
            $table->string('Transmission_ar');
            $table->string('Engine_en');
            $table->string('Engine_ar');
            $table->string('Fuel_en');
            $table->string('Fuel_ar');
            $table->string('Drive_Type_en');
            $table->string('Drive_Type_ar');
            $table->string('color');
           $table->text('overview_en');
            $table->text('overview_ar');
            $table->text('features_en');
            $table->text('features_ar');
             $table->text('images')->nullable();
            $table->bigInteger('created_by');
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
        Schema::dropIfExists('fruits');
    }
}

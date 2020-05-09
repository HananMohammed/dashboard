<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandClass2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_class2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('seo_title_en')->nullable();
            $table->string('seo_title_ar')->nullable();

            $table->string('seo_description_en')->nullable();
            $table->string('seo_description_ar')->nullable();
            $table->string('seo_keyword_en')->nullable();
            $table->string('seo_keyword_ar')->nullable();

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
        Schema::dropIfExists('brand_class2s');
    }
}

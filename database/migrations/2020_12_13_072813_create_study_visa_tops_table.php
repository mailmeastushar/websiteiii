<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyVisaTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_visa_tops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('country_study_visa');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_visa_tops');
    }
}

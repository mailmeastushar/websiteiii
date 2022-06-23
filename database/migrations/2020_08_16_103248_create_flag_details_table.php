<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlagDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flag_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('country')->nullable();
            $table->string('name')->nullable();
            $table->string('faq')->nullable();
            $table->string('answer')->nullable();
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
        Schema::dropIfExists('flag_details');
    }
}

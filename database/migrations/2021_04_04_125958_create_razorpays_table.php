<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRazorpaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razorpays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('payment_id'); // razorpay payment id
            $table->integer('user_id');
            $table->string('amount');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('agent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('razorpays');
    }
}

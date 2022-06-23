<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAustraliaSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('australia_submenus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('submenu');
            $table->string('australia_menus_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('australia_submenus');
    }
}

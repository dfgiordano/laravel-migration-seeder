<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('src', 300);
            $table->string('location', 50);
            $table->string('tipology', 20);
            $table->string('city', 30);
            $table->string('country', 30);
            $table->float('price', 6, 2);
            $table->tinyInteger('vote');
            $table->boolean('available') -> default(1);
            $table->string('email', 40);
            $table->string('telephone', 20);
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
        Schema::dropIfExists('holidays');
    }
}

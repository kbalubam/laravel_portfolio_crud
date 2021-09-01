<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('fonction', 300);
            $table->string('description', 300);
            $table->string('birthdhay', 50);
            $table->string('website',40);
            $table->string('phone', 40);
            $table->string('city', 40);
            $table->string('age', 40);
            $table->string('degree', 40);
            $table->string('email', 40);
            $table->string('freelance', 40);
            $table->string('descritpion_bis', 400);
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
        Schema::dropIfExists('abouts');
    }
}

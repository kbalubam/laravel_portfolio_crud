<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('presentation', 40);
            $table->string('img1', 40);
            $table->string('lien1', 40);
            $table->string('img2', 40);
            $table->string('lien2', 40);
            $table->string('img3', 40);
            $table->string('lien3', 40);
            $table->string('img4', 40);
            $table->string('lien4', 40);
            $table->string('img5', 40);
            $table->string('lien5', 40);
            $table->string('img6', 40);
            $table->string('lien6', 40);
            $table->string('img7', 40);
            $table->string('lien7', 40);
            $table->string('img8', 40);
            $table->string('lien8', 40);
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
        Schema::dropIfExists('portfolios');
    }
}

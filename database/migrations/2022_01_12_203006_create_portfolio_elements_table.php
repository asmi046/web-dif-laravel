<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_elements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 200);
            $table->string('type', 100);
            $table->string('smile_description', 1000);
            $table->string('site_lnk', 150);
            $table->string('obl_img', 150);
            $table->string('main_img', 150);
            $table->string('colors', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_elements');
    }
}

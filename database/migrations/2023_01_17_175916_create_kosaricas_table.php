<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosaricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosaricas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv')->nullable();
            $table->string('mobitel')->nullable();
            $table->string('adresa')->nullable();
            $table->string('naziv_proizvoda')->nullable();
            $table->string('kolicina')->nullable();
            $table->string('cijena')->nullable();
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
        Schema::dropIfExists('kosaricas');
    }
}

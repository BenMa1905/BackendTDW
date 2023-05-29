<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 50)->nullable(false);
            $table->string('breed', 50)->nullable(false);
            $table->string('sex', 50)->nullable(false); // (Macho, Hembra')
            $table->integer('age')->nullable(false);
            $table->string('description', 150)->nullable(false);
            $table->string('photo', 100)->nullable(false);
            $table->integer('idUser')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perros');
    }
};

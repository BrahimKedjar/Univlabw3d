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
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            // $table->unsignedSmallInteger('departement_id');
            // $table->foreign('departement_id')->references('id')->on('departement');
            // $table->string('speciality');
            $table->enum('speciality',['IDTW', 'F3I', 'RSD', 'GL', 'IFIA']);
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
                Schema::dropIfExists('specialities');

    }
};
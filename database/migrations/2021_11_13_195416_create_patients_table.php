<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->string("phoneNumber");
            $table->string("streetName");
            $table->string("streetNumber");
            $table->string("streetDistrict");
            $table->string("city");
            $table->string("state");
            $table->timestamp("birthDate");
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string("color");
            $table->string("civilState");
            $table->string("religion");
            $table->string("scholarship");
            $table->string("profession");
            $table->string("placeOfBirth");
            $table->float("weight");
            $table->float("height");
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
        Schema::dropIfExists('patients');
    }
}

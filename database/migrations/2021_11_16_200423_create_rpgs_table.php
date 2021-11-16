<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpgs', function (Blueprint $table) {
            $table->id();
            $table->foreign('patientId')->references('id')->on('patients');
            $table->string("rightFeet");
            $table->string("leftFeet");
            $table->string("rightAnkle");
            $table->string("leftAnkle");
            $table->string("rightKnee");
            $table->string("leftKnee");
            $table->string("pelvis");
            $table->string("lumbar");
            $table->string("dorsal");
            $table->string("cervical");
            $table->string("rightShoulder");
            $table->string("leftShoulder");
            $table->string("shoulderBlade");
            $table->string("head");
            $table->string("observations");
            $table->string("physiotherapyDiagnosis");
            $table->string("rehabTarget");
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
        Schema::dropIfExists('rpgs');
    }
}

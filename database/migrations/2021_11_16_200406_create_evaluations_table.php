<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patientId');
            $table->foreign('patientId')->references('id')->on('patients');
            $table->string("currentDiseaseHistoric");
            $table->string("associateDiseases");
            $table->string("pastDiseases");
            $table->string("familyHistoric");
            $table->string("lifeHabits");
            $table->string("clinicalDiagnosis");
            $table->string("mainComplain");
            $table->string("medication");
            $table->string("mobility");
            $table->string("consciousState");
            $table->string("skinAndMucous");
            $table->string("accessWays");
            $table->string("thoraxFormat");
            $table->string("ventilationType");
            $table->string("ventilationMuscularPattern");
            $table->string("ventilationRhythm");
            $table->string("abdomen");
            $table->string("signals");
            $table->string("symptoms");
            $table->string("thoracicMobility");
            $table->string("lungExpansion");
            $table->float("respiratoryFrequency");
            $table->float("cardiacFrequency");
            $table->float("saturation");
            $table->float("arterialPressure");
            $table->float("temperature");
            $table->string("lungHearing");
            $table->string("cough");
            $table->string("secretion");
            $table->string("ventilationMode");
            $table->string("tonus");
            $table->string("reflexesAndReaction");
            $table->string("muscularStrength");
            $table->string("sensibility");
            $table->string("motorControl");
            $table->string("complimentaryExams");
            $table->string("functionalKineticDiagnosis");
            $table->string("problem");
            $table->string("target");
            $table->string("conduct");
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
        Schema::dropIfExists('evaluations');
    }
}

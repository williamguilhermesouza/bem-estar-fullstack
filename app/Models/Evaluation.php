<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        "currentDiseaseHistoric",
        "associateDiseases",
        "pastDiseases",
        "familyHistoric",
        "lifeHabits",
        "clinicalDiagnosis",
        "mainComplain",
        "medication",
        "mobility",
        "consciousState",
        "skinAndMucous",
        "accessWays",
        "thoraxFormat",
        "ventilationType",
        "ventilationMuscularPattern",
        "ventilationRhythm",
        "abdomen",
        "signals",
        "symptoms",
        "thoracicMobility",
        "lungExpansion",
        "respiratoryFrequency",
        "cardiacFrequency",
        "saturation",
        "arterialPressure",
        "temperature",
        "lungHearing",
        "cough",
        "secretion",
        "ventilationMode",
        "tonus",
        "reflexesAndReaction",
        "muscularStrength",
        "sensibility",
        "motorControl",
        "complimentaryExams",
        "functionalKineticDiagnosis",
        "problem",
        "target",
        "conduct"
    ];
}

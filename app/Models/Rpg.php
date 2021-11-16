<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpg extends Model
{
    use HasFactory;

    protected $fillable = [
        "rightFeet",
        "leftFeet",
        "rightAnkle",
        "leftAnkle",
        "rightKnee",
        "leftKnee",
        "pelvis",
        "lumbar",
        "dorsal",
        "cervical",
        "rightShoulder",
        "leftShoulder",
        "shoulderBlade",
        "head",
        "observations",
        "physiotherapyDiagnosis",
        "rehabTarget"
    ];
}

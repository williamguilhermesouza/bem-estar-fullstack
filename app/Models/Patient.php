<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        "phoneNumber",
        "streetName",
        "streetNumber",
        "streetDistrict",
        "city",
        "state",
        "birthDate",
        "cpf",
        "email",
        "color",
        "civilState",
        "religion",
        "scholarship",
        "profession",
        "placeOfBirth",
        "weight",
        "height",
        "createdAt",
        "updatedAt",
    ];
}

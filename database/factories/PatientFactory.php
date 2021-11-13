<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'sex' => 'Masculino',
            "phoneNumber" => '(21) 9999999999',
            "streetName"=> 'Rua augusta',
            "streetNumber" => '322',
            "streetDistrict" => 'Avenida Paulista',
            "city" => 'Sao Paulo',
            "state" => 'SP',
            "birthDate" => now(),
            "cpf" => '112.253.344-99',
            "email" => $this->faker->unique()->safeEmail(),
            "color" => 'Pardo',
            "civilState" => 'Solteiro',
            "religion" => 'Espirita',
            "scholarship" => 'Ensino Superior Completo',
            "profession" => 'Programador',
            "placeOfBirth" => 'Rio de Janeiro',
            "weight" => 100.0,
            "height" => 1.77,
            "createdAt" => now(),
            "updatedAt" => now(),
        ];
    }
}

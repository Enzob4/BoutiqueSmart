<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SmartphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */public function definition() {
    return [
        'nom' => $this->faker->randomElement($array = array('iPhone', 'Samsung', 'Xiaomi')),
        'fabriquant' =>$this->faker->randomElement($array = array('Orange', 'Zizi')),
        'taille' => $this->faker->randomElement($array = array('6"', '6"5', '7"')),
        'type_reseau' => $this->faker->randomElement($array = array('4G', '5G')),
        'systeme' => $this->faker->randomElement($array = array('Android', 'iOS')),
        'connectique' => $this->faker->randomElement($array = array('USB C', 'mini USB','Lighting')),
        'autonomie' => $this->faker->randomElement($array = array('10h', '8h')),
        'caracteristique' => $this->faker->paragraph,
    ];
}
}

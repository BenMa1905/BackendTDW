<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perro>
 */
class PerroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'breed' => $this->faker->randomElement([
                'Akita',
                'Alaskan Malamute',
                'American Staffordshire Terrier',
                'Basset Hound',
                'Beagle',
                'Bichón Frisé',
                'Bichón Maltés',
                'Chilean kiltro',
                'Chihuahua',
                'Chow Chow',
                'Cocker Spaniel',
                'Collie',
                'Dachshund',
                'Dogo Argentino',
                'Shiba Inu',
            ]),
            'sex' => $this->faker->randomElement(['Macho', 'Hembra']),
            'age' => $this->faker->numberBetween(1, 20),
            'description' => $this->faker->text(150),
            'photo' => $this->faker->imageUrl(),
            'idUser' => $this->faker->numberBetween(1, 10),
        ];
    }
}

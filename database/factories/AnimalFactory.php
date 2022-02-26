<?php

namespace Database\Factories;

use App\Models\Specie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $sex = $this->faker->randomElement(['male', 'female']);        
        $name = $this->faker->unique()->firstName($sex);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'size' => $this->faker->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'sex' => $sex,
            'location' => $this->faker->randomElement(['Álava','Albacete','Alicante','Almería','Asturias','Avila','Badajoz','Barcelona','Burgos','Cáceres',
                'Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','La Coruña','Cuenca','Gerona','Granada','Guadalajara',
                'Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo','Madrid','Málaga','Murcia','Navarra',
                'Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona',
                'Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza']),
            'birth' => $this->faker->dateTimeBetween('-20 years', 'now'),
            'weight' => $this->faker->randomFloat(1, 5, 40),
            'age' => $this->faker->numberBetween(1, 20),
            'breed' => $this->faker->word(20),
            'health' => $this->faker->sentence(),
            'description' => $this->faker->text(500),
            'accept_cats' => $this->faker->randomElement([0, 1]),
            'accept_dogs' => $this->faker->randomElement([0, 1]),
            'accept_children' => $this->faker->randomElement([0, 1]),
            'specie_id' => Specie::all()->random()->id,            
            ];


        // $dt = $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now');
        // $date = $dt->format("Y-m-d"); // 1994-09-24
    }
}

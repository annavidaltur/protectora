<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;
use App\Models\Image;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animals = Animal::factory(100)->create();

        foreach($animals as $animal){
            Image::factory(1)->create([
                'imageable_id' => $animal->id,
                'portada' => 1, 
            ]);
            
            Image::factory(6)->create([
                'imageable_id' => $animal->id,
                'portada' => 0, 
            ]);
        }
    }
}

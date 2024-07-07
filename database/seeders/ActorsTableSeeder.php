<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorsTableSeeder extends Seeder
{
    public function run()
    {
        Actor::create([
            'name' => 'Leonardo DiCaprio',
            'born' => '1974-11-11',
            'film' => 'Inception',
            'year' => 2010,
            'image' => 'leonardo_dicaprio.jpg',
        ]);

        Actor::create([
            'name' => 'Johnny Depp',
            'born' => '1963-06-09',
            'film' => 'Pirates of the Caribbean',
            'year' => 2003,
            'image' => 'johnny_depp.jpg',
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stars')->insert([
            'firstname' => 'Beyoncé',
            'lastname' => 'Knowles',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Beyonc%C3%A9_at_The_Lion_King_European_Premiere_2019.png/520px-Beyonc%C3%A9_at_The_Lion_King_European_Premiere_2019.png',
            'description' => fake()->text(500),
        ]);
        DB::table('stars')->insert([
            'firstname' => 'Angelina',
            'lastname' => 'Jolie',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Angelina_Jolie_%2848462859552%29_%28cropped%29.jpg/440px-Angelina_Jolie_%2848462859552%29_%28cropped%29.jpg',
            'description' => fake()->text(500),
        ]);
        DB::table('stars')->insert([
            'firstname' => 'Leonardo',
            'lastname' => 'DiCaprio',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Leonardo_Dicaprio_Cannes_2019.jpg/500px-Leonardo_Dicaprio_Cannes_2019.jpg',
            'description' => fake()->text(500),
        ]);
    }
}

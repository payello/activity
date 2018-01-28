<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'user_id' => 1,
            'country_id' => 78,
            'title' => 'Skiing in Val Thorens',
            'body' => 'Val Thorens, located in the Tarentaise Valley, Savoie, French Alps, is the highest ski resort in Europe, at an altitude of 2300 m. It is located in the commune of Saint-Martin-de-Belleville in the Savoie département.'


        ]);
        $post->save();

        $post = new \App\Post([
            'user_id' => 1,
            'country_id' => 213,
            'title' => 'Cycling in Majorca',
            'body' => 'There\'s no two ways about it, Majorca is the holiday destination for British cyclists right now. But why do they flock in their tens of thousands to this, the largest of the Balearic islands, each year?

Pedro Delgado, the Spaniard who won the Tour de France and Vuelta a España in the late 1980s, says it\'s simple: "In Majorca you can find everything," he tells me. "It\'s very close to Britain, it\'s only a short flight.'
        ]);
        $post->save();
    }
}
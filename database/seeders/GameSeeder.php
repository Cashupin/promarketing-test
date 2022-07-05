<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Game::updateOrCreate([
            'name' => 'BAMBOO RUSH',
            'description' => 'Descripcion 1',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status_id' => 1

        ]);
    }
}

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
            'description' => 'BAMBOO RUSH',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status_id' => 1
        ]);
        Game::updateOrCreate([
            'name' => 'REELS OF WEALTH ',
            'description' => 'REELS OF WEALTH ',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'status_id' => 1
        ]);
        Game::updateOrCreate([
            'name' => 'DRAGON & PHOENIX',
            'description' => 'DRAGON & PHOENIX',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
            'status_id' => 1
        ]);
        Game::updateOrCreate([
            'name' => 'TAKE THE BANK',
            'description' => 'TAKE THE BANK',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
            'status_id' => 1
        ]);
        Game::updateOrCreate([
            'name' => 'CAISHEN’S ARRIVAL',
            'description' => 'CAISHEN’S ARRIVAL',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
            'status_id' => 1
        ]);
        Game::updateOrCreate([
            'name' => 'GEMMED!',
            'description' => 'GEMMED!',
            'url_game' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
            'url_image' => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
            'status_id' => 1
        ]);
    }
}

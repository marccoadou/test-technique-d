<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prizes')->insert([
            [
                'name'   => 'tesla',
                'weight' => .01,
            ],
            [
                'name'   => 'Weekend à la montagne',
                'weight' => .09
            ],
            [
                'name'   => 'PS5',
                'weight' => .1,
            ],
            [
                'name'   => 'PC Gamer',
                'weight' => .3
            ],
            [
                'name'   => 'jeu de cartes',
                'weight' => .5
            ]
        ]);
    }
}

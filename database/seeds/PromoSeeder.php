<?php

use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([
            
            'titre' => "Are you ready to stand out?",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
        ]);
    }
}

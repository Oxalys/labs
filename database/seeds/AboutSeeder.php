<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'titre' => "GET IN THE LAB AND DISCOVER THE WORLD",

            'texteGauche' => "Lorem ipsum ",

            'texteDroite' => "Cras ex mauris, .",

            'video' => "https://www.youtube.com/watch?v=JgHfx2v9zOU&feature=emb_logo",
        ]);
    }
}

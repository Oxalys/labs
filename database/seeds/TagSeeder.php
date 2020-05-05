<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'nom' => "bleu",
        ]);
        DB::table('tags')->insert([
            'nom' => "rouge",
        ]);
        DB::table('tags')->insert([
            'nom' => "vert",
        ]);
        DB::table('tags')->insert([
            'nom' => "orange",
        ]);
        DB::table('tags')->insert([
            'nom' => "violet",
        ]);
        DB::table('tags')->insert([
            'nom' => "noir",
        ]);
        DB::table('tags')->insert([
            'nom' => "blanc",
        ]);
        DB::table('tags')->insert([
            'nom' => "jaune",
        ]);
        DB::table('tags')->insert([
            'nom' => "turquoise",
        ]);
        DB::table('tags')->insert([
            'nom' => "rose",
        ]);
        DB::table('tags')->insert([
            'nom' => "gris",
        ]);
    }
}

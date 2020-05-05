<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nom' => "voyages",
        ]);
        DB::table('categories')->insert([
            'nom' => "mode",
        ]);
        DB::table('categories')->insert([
            'nom' => "animaux",
        ]);
        DB::table('categories')->insert([
            'nom' => "jeux",
        ]);
        DB::table('categories')->insert([
            'nom' => "paysages",
        ]);
        DB::table('categories')->insert([
            'nom' => "beauté",
        ]);
    }
}

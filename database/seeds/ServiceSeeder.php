<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'logo' => "flaticon-039-vector",
            'titre' => "je suis un titre",
            'texte' => "je suis un service ",

        ]);
    }
}

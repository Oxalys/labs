<?php

use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            
            'texte' => "2017 All rights reserved. Designed by ",
            'textLien' => "Colorlib", 
            'lien' => "https://www.facebook.com/home.php",
        ]);
    }
}

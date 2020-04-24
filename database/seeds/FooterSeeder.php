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
            
            'texte' => "Cras ex mauris, .",

            'lien' => "https://www.facebook.com/home.php",
        ]);
    }
}

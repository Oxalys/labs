<?php

use Illuminate\Database\Seeder;

class ImgHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('img_headers')->insert([
            'img' => "01.jpg",
        ]);
        DB::table('img_headers')->insert([
            'img' => "02.jpg",
        ]);
    }
}

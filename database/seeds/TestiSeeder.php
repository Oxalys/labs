<?php

use Illuminate\Database\Seeder;

class TestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testis')->insert([
            'auteur' => "Shannon Stoller",
            'photo' => "avatar/01.jpg",
            'role' => "CEO Company",
            'comm' => "coucou lel jpp",
        ]);
        DB::table('testis')->insert([
            'auteur' => "Salome Yonte Montero",
            'photo' => "avatar/03.jpg",
            'role' => "CEO Company",
            'comm' => "tik tok vie",
        ]);
        DB::table('testis')->insert([
            'auteur' => "Bryan Londot",
            'photo' => "avatar/02.jpg",
            'role' => "Web Dev Company",
            'comm' => "chicha & foot sont mes passions",
        ]);
        DB::table('testis')->insert([
            'auteur' => "Rayane Tahiri",
            'photo' => "avatar/01.jpg",
            'role' => "Design Company",
            'comm' => "Il fait trop chaud",
        ]);
        DB::table('testis')->insert([
            'auteur' => "Fati Dahri",
            'photo' => "avatar/03.jpg",
            'role' => "Dev Company",
            'comm' => "Je fais des crepes",
        ]);
        DB::table('testis')->insert([
            'auteur' => "Zaïnab Fahem",
            'photo' => "avatar/02.jpg",
            'role' => "Marketing Company",
            'comm' => "Laisse moi tranquille Isma",
        ]);
        DB::table('testis')->insert([
            'auteur' => "Noel Bakiasi",
            'photo' => "avatar/01.jpg",
            'role' => "Trainee Company",
            'comm' => "Je suis LE type",
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class SeeServSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('see_servs')->insert([
            'titre' => "GET IN THE LAB",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-023-flask",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "PROJECTS ONLINE",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-011-compass",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "SMART MARKETING",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-037-idea",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "SOCIAL MEDIA",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-039-vector",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "BRAINSTORMING",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-036-brainstorming",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "DOCUMENTED",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-026-search",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "RESPONSIVE",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-018-laptop-1",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "RETINA READY",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-043-sketch",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "ULTRA MODERN",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-012-cube",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "GET THE SUMMER BODY",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-005-thinking-1",
        ]);
        DB::table('see_servs')->insert([
            'titre' => "FROM THE TREE",

            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",

            'texteCourt' => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",

            'logo' => "flaticon-032-explorer",
        ]);
    }
}

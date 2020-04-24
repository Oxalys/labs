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

            'texteGauche' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id ullamcorper velit, eu efficitur dolor. Integer vitae venenatis sapien. Pellentesque at tortor convallis, lobortis purus eu, blandit ipsum. Nam fringilla, felis vel efficitur auctor, dolor tortor tristique enim, non aliquam odio neque vel eros. Sed eleifend venenatis velit, quis fringilla turpis pulvinar sed. Quisque vitae tellus tellus. Curabitur facilisis pretium iaculis. Suspendisse sapien augue, convallis eget scelerisque in, eleifend in magna. Curabitur rutrum vestibulum iaculis. Suspendisse potenti.",

            'texteDroite' => "Donec a scelerisque augue. In scelerisque pretium arcu, sit amet maximus elit eleifend quis. Nunc maximus auctor sodales. Vivamus dapibus mauris in diam porta viverra. Sed porttitor sit amet ex vel ullamcorper. Nulla ante tortor, luctus eu posuere vel, fermentum eu tortor. Aenean sit amet dolor massa. Fusce in dui faucibus, pulvinar est eget, ultricies tellus. Curabitur et lacus in est sodales aliquet. Nam ac nisl eget elit ullamcorper mattis. Etiam nisi eros, imperdiet eget convallis non, consectetur sed dui.",

            'video' => "https://www.youtube.com/watch?v=JgHfx2v9zOU&feature=emb_logo",
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 2,
            'img' => "blog/blog-2.jpg",
            'titre' => "Just a simple blog troll",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            'categorie_id' => 2,
            'valid' => 1,
            'created_at' => Carbon::now()->format('Y-m-d'),

        ]);
        DB::table('articles')->insert([
            'user_id' => 2,
            'img' => "blog/blog-2.jpg",
            'titre' => "Just a simple blog post",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            'categorie_id' => 1,
            'valid' => 1,
            'created_at' => Carbon::now()->format('Y-m-d'),

        ]);
        DB::table('articles')->insert([
            'user_id' => 2,
            'img' => "blog/blog-2.jpg",
            'titre' => "Just a simple blog post",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            'categorie_id' => 3,
            'valid' => 1,
            'created_at' => Carbon::now()->format('Y-m-d'),

        ]);
        DB::table('articles')->insert([
            'user_id' => 2,
            'img' => "blog/blog-2.jpg",
            'titre' => "Just a simple blog troll",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            'categorie_id' => 4,
            'valid' => 1,
            'created_at' => Carbon::now()->format('Y-m-d'),

        ]);
        DB::table('articles')->insert([
            'user_id' => 2,
            'img' => "blog/blog-2.jpg",
            'titre' => "Just a simple blog troll",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            'categorie_id' => 5,
            'valid' => 1,
            'created_at' => Carbon::now()->format('Y-m-d'),

        ]);
        DB::table('articles')->insert([
            'user_id' => 2,
            'img' => "blog/blog-2.jpg",
            'titre' => "Just a simple blog post",
            'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            'categorie_id' => 6,
            'valid' => 1,
            'created_at' => Carbon::now()->format('Y-m-d'),

        ]);
    }
}

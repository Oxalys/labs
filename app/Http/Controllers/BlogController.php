<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Quote;
use App\Header;
use App\Article;
use App\Categorie;
use App\Tag;
use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        $quote = Quote::find(1);
        $articles = Article::where('valid', 1)->orderby('id', 'desc')->paginate(3);
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $footer = Footer::find(1);
        return view ('blog.blog', compact("header", "quote", "categories", "tags", "articles", "footer"));
    }


    public function search(Request $request) {
        $search = $request->input('search');
        $articles = Article::where('titre','LIKE','%'. $search .'%')->where('valid', 1)->orderby('id', 'desc')->paginate(3);

        //
        $header = Header::all();
        $quote = Quote::find(1);
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $footer = Footer::find(1);
        return view ('blog.blog', compact("header", "quote", "categories", "tags", "footer", "articles", 'search'));
    }

    public function searchcat($id) {
        $articles = Article::where('categorie_id', $id)->where('valid', 1)->orderby('id', 'desc')->paginate(3);
        //
        $header = Header::all();
        $quote = Quote::find(1);
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $footer = Footer::find(1);
        return view ('blog.blog', compact("header", "quote", "categories", "tags", "footer", "articles", 'search'));
    }

    public function searchtag(Tag $tag) {

        $articles = $tag->articles()->where('valid', 1)->orderby('id', 'desc')->paginate(3);
        //
        $header = Header::all();
        $quote = Quote::find(1);
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $footer = Footer::find(1);
        return view ('blog.blog', compact("header", "quote", "categories", "tags", "footer", "articles", 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}

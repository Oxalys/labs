<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'text'=> 'required|min:3'
        ]);

        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#commentaire')
                        ->withErrors($validator)
                        ->withInput();
        }

        $article = Article::find($id);

        $commentaire = new Commentaire();
        $commentaire->article_id = $article->id;
        $commentaire->user_id = Auth::id();
        $commentaire->texte = $request->input('text');
        $commentaire->save();
        return redirect()->to(url()->previous() . '#commentaire')->with('send', 'Votre commentaire a été ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}

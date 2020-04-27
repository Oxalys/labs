<?php

namespace App\Http\Controllers;

use App\Testi;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testi = Testi::all();
        return view('backoffice.testiEdit', compact("testi"));
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
        $testi = new Testi();
        $photo=Storage::disk('public')->put('',$request->file('photo'));
        $testi->auteur = $request->input('auteur');
        $testi->role = $request->input('role');
        $testi->comm = $request->input('comm');
        $testi->photo = $photo;
        $testi->save();
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testi $testi)
    {
        return view('backoffice.editComm', compact('testi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testi $testi)
    {
        $photo=Storage::disk('public')->put('',$request->file('photo'));
        $testi->auteur = $request->input('auteur');
        $testi->role = $request->input('role');
        $testi->comm = $request->input('comm');
        $testi->photo = $photo;

        $testi->save();
        return redirect()->route('testi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testi $testi)
    {
        $testi->delete();
        return redirect()->route('testi.index');
    }
}

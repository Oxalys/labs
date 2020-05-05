<?php

namespace App\Http\Controllers;

use App\SeeServ;

use Illuminate\Http\Request;

class SeeServController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seeServ = SeeServ::all();
        return view('backoffice.seeServAdd', compact('seeServ'));
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
        $seeServ = new SeeServ();
        $seeServ->titre = $request->input('titre');
        $seeServ->texte = $request->input('texte');
        $seeServ->logo = $request->input('logo');

        $seeServ->save();
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
    public function edit(SeeServ $seeServ)
    {
        return view('backoffice.seeServEdit', compact('seeServ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeeServ $seeServ)
    {
        $seeServ->titre = $request->input('titre');
        $seeServ->texte = $request->input('texte');
        $seeServ->logo = $request->input('logo');

        $seeServ->save();
        return redirect()->route('seeServ.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeeServ $seeServ)
    {
        $seeServ->delete();
        return redirect()->route('seeServ.index');
    }
}

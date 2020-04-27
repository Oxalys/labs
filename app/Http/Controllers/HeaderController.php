<?php

namespace App\Http\Controllers;

use App\Header;
use App\ImgHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::find(1);
        $img_headers = ImgHeader::all();
        return view("backoffice.headerEdit", compact("headers", "img_headers"));
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
        $storage=Storage::disk('public')->put('', $request->file('img'));
    
    $imgHeader= new ImgHeader();
    $imgHeader->img = $storage;
    
    $imgHeader->save();
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
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        if ($request->hasFile('logo')) {
            $logo=Storage::disk('public')->put('', $request->file('logo'));
            $header->logo=$logo;
        }

        $header->texte=$request->input('texte');
        $header->save();
        return redirect()->route("index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imgHeader = ImgHeader::find($id);
        Storage::disk('public')->delete($imgHeader->img);
        $imgHeader->delete();
        return redirect()->route('header.index');
    }
}

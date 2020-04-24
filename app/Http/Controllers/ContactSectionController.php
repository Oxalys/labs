<?php

namespace App\Http\Controllers;

use App\ContactSection;

use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactSection = ContactSection::first();
        return view('backoffice.contactEdit', compact('contactSection'));
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
     * @param  \App\ContactSection  $contactSection
     * @return \Illuminate\Http\Response
     */
    public function show(ContactSection $contactSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactSection  $contactSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactSection $contactSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactSection  $contactSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactSection $contactSection)
    {
        $contactSection->description=$request->input('description');
        $contactSection->bureau=$request->input('bureau');
        $contactSection->adresse=$request->input('adresse');
        $contactSection->villecode=$request->input('villecode');
        $contactSection->tel=$request->input('tel');
        $contactSection->mail=$request->input('mail');

        $contactSection->save();
        
        return redirect()->route("index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactSection  $contactSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactSection $contactSection)
    {
        //
    }
}

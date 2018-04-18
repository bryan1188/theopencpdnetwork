<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accreditation;
use App\Cpd_provider;

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accreditations = Accreditation::orderBy('title','asc')->paginate(10);
        return view('accreditation.index', compact('accreditations'));

    }

    public function search(Request $request)
    
    {

       $accreditations = Accreditation::where('title','LIKE','%'.request('search_text').'%')
            ->orderBy('title','asc')->paginate(10); 
        return view('accreditation.index', compact('accreditations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cpd_providers = Cpd_provider::all();
        return view('accreditation.create', compact('cpd_providers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Accreditation $accreditation)
    {
        //

        Accreditation::create(request()->all());
        return redirect('/accreditations');

    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Accreditation $accreditation)
    {
        //
        return view('accreditation.show', compact('accreditation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Accreditation $accreditation)
    {
        //
         $cpd_providers = Cpd_provider::orderBy('name','asc')->get();
         return view('accreditation.edit', compact('accreditation','cpd_providers'));

    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accreditation $accreditation)
    {
        //
         $accreditation->update($request->all());
        return redirect('/accreditations');
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

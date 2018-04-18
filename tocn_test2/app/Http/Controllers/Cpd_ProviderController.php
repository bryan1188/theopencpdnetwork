<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpd_provider;

class Cpd_ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cpd_providers = Cpd_provider::orderBy('name','asc')->paginate(10);
        return view('cpd_provider.index', compact('cpd_providers'));

    }


    public function search(Request $request)
    
    {

       $cpd_providers = Cpd_provider::where('name','LIKE','%'.request('search_text').'%')
            ->orderBy('name','asc')->paginate(10); 
        return view('cpd_provider.index', compact('cpd_providers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('cpd_provider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cpd_provider $cpd_provider)
    {
        //

        Cpd_provider::create(request()->all());
        return redirect('/cpd_providers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
     public function show(Cpd_provider $cpd_provider)  //Route Model Binding. https://www.youtube.com/watch?v=Yi041ER2YTQ&list=PL3VM-unCzF8iPERY07XRw0JXG_c50CapR&index=9
    {

        return view('cpd_provider.show', compact('cpd_provider'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cpd_provider $cpd_provider)
    {
        //
        return view('cpd_provider.edit', compact('cpd_provider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cpd_provider $cpd_provider)
    {
        //
         $cpd_provider->update($request->all());
        return redirect('/cpd_providers/'.$cpd_provider->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cpd_provider $cpd_provider)
    {
        //
        $cpd_provider->delete();

        return redirect('/cpd_providers');

    }
}

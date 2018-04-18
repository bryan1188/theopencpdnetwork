<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\View_subscription;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionals = Professional::orderBy('last_name','asc')->paginate(10); 

        return view('professional.index', compact('professionals'));
    }

    public function search(Request $request)
    
    {

       $professionals = Professional::where('last_name','LIKE','%'.request('search_text').'%')
            ->orWhere('first_name','LIKE','%'.request('search_text').'%')
            ->orWhere('middle_name','LIKE','%'.request('search_text').'%')
            ->orderBy('last_name','asc')->paginate(10); 
        return view('professional.index', compact('professionals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('professional.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Professional $professional)
    {
        //

        //Professional::create(request(['username', 'first_name', 'middle_name', 'last_name','profession',
          //                             'license_number','email','mobile_number',
            //                           'issue_date','expiry_date'])); //Accreditation::create(request()->all());
        
       Professional::create(request()->all());
        return redirect('/professionals');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)  //Route Model Binding. https://www.youtube.com/watch?v=Yi041ER2YTQ&list=PL3VM-unCzF8iPERY07XRw0JXG_c50CapR&index=9
    {

        $professional_subscriptions = View_subscription::where('professional_id', $professional->id)
               ->orderBy('run_date', 'desc')->paginate(10);
        //$professional_subscriptions = $professional->view_subscription;
        return view('professional.show', compact('professional','professional_subscriptions'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        
        return view('professional.edit', compact('professional'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        //

        $professional->update($request->all());
        return redirect('/professionals/'.$professional->id);

    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        //
        $professional->delete();
        return redirect('/professionals');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\View_course;
use App\Professional;
use App\Subscription;
use Illuminate\Support\Facades\DB;


class SubscriptionController extends Controller
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
    public function create(Professional $professional) 
    {
        //$courses = DB::table("view_courses")->select('*')->whereNotIn('id',function($query){$query->select('course_id')->from('subscriptions')->where('professional_id',1);})->get();  //exlude from the list the courses that the professional already subscribed
        $courses = View_course::orderBy('title','asc')->get();
        return view('subscription.create', compact('courses','professional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subscription $subscription)
    
    {
        //
        subscription::create(request()->all());
        return redirect('/professionals/'.$request->input('professional_id'));

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
    public function edit(Subscription $subscription)
    {
        //
        $courses = View_course::orderBy('title','asc')->get();
        return view('subscription.edit', compact('subscription','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Subscription $subscription)
    {
        //
         $subscription->update($request->all());
        return redirect('/professionals/'.$subscription->professional_id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Subscription $subscription)
    {
        //
        $subscription->delete();

        return redirect('/professionals/'.$subscription->professional_id);

    }
}

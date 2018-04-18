<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accreditation;
use App\Course;
use App\View_course;

class CourseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $courses = View_course::orderBy('title','asc')->paginate(10);
        return view('course.index', compact('courses'));

    }


    public function search(Request $request)
    
    {

       $courses = View_course::where('title','LIKE','%'.request('search_text').'%')
            ->orderBy('title','asc')->paginate(10); 
        return view('course.index', compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $accreditations = Accreditation::orderBy('title','asc')->get();
        return view('course.create', compact('accreditations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    
    {
        //
        Course::create(request()->all());
        return redirect('/courses');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)

    {
        //
        return view('course.show', compact('course'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Course $course)
    {
        //
         $accreditations = Accreditation::orderBy('title','asc')->get();
         return view('course.edit', compact('accreditations','course'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
         $course->update($request->all());
        return redirect('/courses/'.$course->id);
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

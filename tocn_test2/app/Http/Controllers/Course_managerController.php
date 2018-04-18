<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course_manager;
use Illuminate\Support\Facades\Hash;

class Course_managerController extends Controller
{
    //

	public function __construct()

    {

        $this->middleware('webadmin'); //only web admin has access to course manager pages

    }


	public function index()

	{

		$course_managers = Course_manager::orderBy('last_name','asc')->paginate(10);

		return view('course_manager.index', compact('course_managers'));

	}


	public function search(Request $request)
    
    {

        $course_managers = Course_manager::where('last_name','LIKE','%'.request('search_text').'%')
            ->orWhere('first_name','LIKE','%'.request('search_text').'%')
            ->orWhere('middle_name','LIKE','%'.request('search_text').'%')
            ->orWhere('name','LIKE','%'.request('search_text').'%')
            ->orWhere('email','LIKE','%'.request('search_text').'%')
            ->orderBy('last_name','asc')->paginate(10); 
        return view('course_manager.index', compact('course_managers'));

    }


	public function show(Course_manager $course_manager)  //Route Model Binding. https://www.youtube.com/watch?v=Yi041ER2YTQ&list=PL3VM-unCzF8iPERY07XRw0JXG_c50CapR&index=9

	{
		
		return view('course_manager.show', compact('course_manager'));

	}


	public function add()

	{
		//if()
		return view('course_manager.add');

	}


	public function store()

	{

		//Create a new course manager
		//Save to the database
		//redirect to /course_managers

		$course_manager = new Course_manager;

		$course_manager->name = request('name');
		$course_manager->email = request('email');
		$course_manager->first_name = request('firstName');
		$course_manager->middle_name = request('middleName');
		$course_manager->last_name = request('lastName');
		$course_manager->password = Hash::make(request('password'));  

		$isWebAdmin = request('webAdminCheck');
		if( $isWebAdmin != "")
			$course_manager->web_admin_flag = "YES";
		else
			$course_manager->web_admin_flag = "NO";

		$course_manager->save();

		return redirect('/course_managers');

	}


	public function edit(Course_manager $course_manager)
	
	{

		return view('course_manager.edit',compact('course_manager'));

	}

	public function editpassword(Course_manager $course_manager)
	
	{

		return view('course_manager.editpassword',compact('course_manager'));

	}


	public function update(Course_manager $course_manager)

	{
		$course_manager->name = request('name');
		$course_manager->email = request('email');
		$course_manager->first_name = request('firstName');
		$course_manager->middle_name = request('middleName');
		$course_manager->last_name = request('lastName');
		$course_manager->password = Hash::make(request('password'));

		$isWebAdmin = request('webAdminCheck');
		if( $isWebAdmin != "")
			$course_manager->web_admin_flag = "YES";
		else
			$course_manager->web_admin_flag = "NO";

		$course_manager->update();

		return redirect('/course_managers/'.$course_manager->id);

	}

	public function updatePassword(Course_manager $course_manager)

	{
		
		$course_manager->name = request('name');
		$course_manager->email = request('email');
		$course_manager->password = Hash::make(request('password'));  
		$course_manager->update();

		return redirect('/course_managers/'.$course_manager->id);

	}
}

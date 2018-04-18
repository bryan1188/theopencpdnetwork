@extends('layout')

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>Course Managers</h1>
	@if(Auth::user()->web_admin_flag == "YES")
		<form method="GET" action="/course_manager/add">
			<button type="submit" class="btn btn-primary">Add Course Manager</button>
		</form>
	@endif
		<div >
	<form class="form-horizontal" role="form" method="GET" action="/course_managers/search" enctype="multipart/form-data">    
	    <div class="form-control">
	       <input id="search_text" type="text" class="form-control" name="search_text" value="{{ old('search_text') }}" required autofocus placeholder="Search">          
	     </div>  
	</form>   
	</div>
	 @foreach ($course_managers as $course_manager)
        <li > <a href="/course_managers/{{ $course_manager->id }}"> {{ $course_manager->last_name }}, {{ $course_manager->first_name }} </a>
        @if(Auth::user()->web_admin_flag == "YES")
	        - <a href="/course_managers/{{ $course_manager->id }}/edit"'">Edit</a>	        
	        	|
	        	<a href="/course_managers/{{$course_manager->id}}/editpassword">Edit Password</a>   	           
        @endif
         </li>    
    @endforeach

{{ $course_managers->links() }}

</body>
</html>
@endsection
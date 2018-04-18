@extends('layout')

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h1>Courses</h1>
	@auth
		<form method="GET" action="/course/create">
			<button type="submit" class="btn btn-primary">Add Course</button>
		</form>
	@endauth
	<div >
	<form class="form-horizontal" role="form" method="GET" action="/courses/search" enctype="multipart/form-data">    
	    <div class="form-control">
	       <input id="search_text" type="text" class="form-control" name="search_text" value="{{ old('search_text') }}" required autofocus placeholder="Search">          
	     </div>  
	</form>   
</div>
	 @foreach ($courses as $course)
        <li > <a href="/courses/{{ $course->course_id }}"> {{ $course->title }}({{$course->run_date}})</a>
        @auth
	        - <a href="/courses/{{ $course->course_id }}/edit"'">Edit</a>
	        |
	        <a href="/courses/{{$course->course_id}}/delete">Delete</a>        	
	        </li>        
        @endauth
    @endforeach

{{ $courses->links() }}

</body>
</html>
@endsection
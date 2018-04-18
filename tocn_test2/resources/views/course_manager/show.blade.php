@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--<li>{{  $course_manager }}</li> -->
	<h1> Course Manager {{ $course_manager->name}}</h1>  
  <div class="form-group">
    <label for="email">Email address: <b>{{ $course_manager->email}} </b> </label>
   </div>    
  <div class="form-group">
    <label for="firstName">First Name: <b>{{ $course_manager->first_name}} </b></label>
    </div>
  <div class="form-group">
    <label for="middleName">Middle Name: <b>{{ $course_manager->middle_name}} </b></label>
  </div>  
  <div class="form-group">
    <label for="lastName">Last Name: <b>{{ $course_manager->last_name}} </b></label>
  </div>
   <div class="form-group">
    <label for="lastName">Web Admin: <b>{{ $course_manager->web_admin_flag}} </b></label>
  </div>
  @if(Auth::user()->web_admin_flag == "YES")
	  <div class="form-group">
		  	<form method="GET" action="/course_managers/{{ $course_manager->id }}/edit">
				{{ csrf_field() }} <!- laravel built in protection>
			  	 <button type="submit" class="btn btn-primary">Edit</button>
		  	</form>
	   </div>
	   <div class="form-group"> 
		 	<form method="GET" action="/course_managers/{{ $course_manager->id }}/editpassword">
				{{ csrf_field() }} <!- laravel built in protection>
			  	 <button type="submit" class="btn btn-primary">Edit Password</button>
		  	</form>
	  </div>
  @endif
</body>
</html>
@endsection
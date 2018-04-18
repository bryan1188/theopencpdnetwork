@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Course Manager Password Reset</title>
</head>
<body>
	<h1>Course Manager Password Reset</h1>
<form method="POST" action="/course_manager/{{ $course_manager->id }}">
	{{ csrf_field() }} <!- laravel built in protection>
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="name" value={{ $course_manager->name }} > 
  </div> 
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" value={{ $course_manager->email }}>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="passwordconfirmation">Confirm Password</label>
    <input type="password" class="form-control" id="passwordconfirmation" name="passwordconfirmation" >
  </div>  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
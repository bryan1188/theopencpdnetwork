@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Add Course Manager</title>
</head>
<body>
	<h1>Add Course Manager</h1>
<form method="POST" action="/course_managers">
	{{ csrf_field() }} <!- laravel built in protection>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="name" >
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>  
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="passwordconfirmation">Confirm Password</label>
    <input type="password" class="form-control" id="passwordconfirmation" name="passwordconfirmation" >
  </div>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName">
  </div>
  <div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" class="form-control" id="middleName" name="middleName" >
  </div>  
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" >
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="webAdminCheck"> Web Admin
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</body>
</html>
@endsection
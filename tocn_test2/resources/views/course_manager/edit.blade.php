@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Course Manager</title>
</head>
<body>
	<h1>Edit Course Manager</h1>
<form method="POST" action="/course_managers/{{ $course_manager->id }}">
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
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" value={{ $course_manager->first_name }}>
  </div>
  <div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" class="form-control" id="middleName" name="middleName" value={{ $course_manager->middle_name }}>
  </div>  
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" value={{ $course_manager->last_name }}>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="webAdminCheck" <?php 
      if ($course_manager->web_admin_flag == "YES")
        echo "checked"; ?>
      > Web Admin
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
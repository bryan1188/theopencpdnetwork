@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Add Professional</title>
</head>
<body>
	<h1>Add Professional</h1>
<form method="POST" action="/professionals">
	{{ csrf_field() }} <!- laravel built in protection>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="first_name">
  </div>
  <div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" class="form-control" id="middleName" name="middle_name" >
  </div>  
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="last_name" >
  </div>
  <div class="form-group">
    <label for="email">Profession</label>
    <input type="text" class="form-control" id="profession" name="profession">
  </div>
  <div class="form-group">
    <label for="email">License Number</label>
    <input type="text" class="form-control" id="licenseNumber" name="license_number">
  </div>    
   <div class="form-group">
   <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" >
  </div> 
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>  
  <div class="form-group">
    <label for="email">Mobile Number</label>
    <input type="text" class="form-control" id="mobileNumber" name="mobile_number">
  </div>  
  <div class="form-group">
    <label for="email">Issue Date</label>
     <input type="date" class="form-control" name="issue_date">
  </div> 
   <div class="form-group">
    <label for="email">Expiry Date</label>
     <input type="date" class="form-control" name="expiry_date">
  </div>   
  <input type="hidden" name="created_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</body>
</html>
@endsection
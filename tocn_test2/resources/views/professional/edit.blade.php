@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Professional</title>
</head>
<body>
	<h1>Edit Professional</h1>
<form method="POST" action="/professionals/{{ $professional->id }}">
	{{ csrf_field() }} <!- laravel built in protection>
  {{ method_field('PATCH') }}
   <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="first_name" value="{{ $professional->first_name }}">
  </div>
  <div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" class="form-control" id="middleName" name="middle_name" value="{{ $professional->middle_name }}">
  </div>  
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="last_name" value="{{ $professional->last_name }}">
  </div>
  <div class="form-group">
    <label for="email">Profession</label>
    <input type="text" class="form-control" id="profession" name="profession" value="{{ $professional->profession }}">
  </div>
  <div class="form-group">
    <label for="email">License Number</label>
    <input type="text" class="form-control" id="licenseNumber" name="license_number" value="{{ $professional->license_number }}">
  </div>  
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="{{ $professional->username }}" >
  </div>     
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $professional->email }}">
  </div>  
  <div class="form-group">
    <label for="email">Mobile Number</label>
    <input type="text" class="form-control" id="mobileNumber" name="mobile_number" value="{{ $professional->mobile_number }}">
  </div>  
  <div class="form-group">
    <label for="email">Issue Date</label>
     <input type="date" class="form-control" name="issue_date" value="{{ $professional->issue_date }}">
  </div> 
   <div class="form-group">
    <label for="email">Expiry Date</label>
     <input type="date" class="form-control" name="expiry_date" value="{{ $professional->expiry_date }}">
  </div>   
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
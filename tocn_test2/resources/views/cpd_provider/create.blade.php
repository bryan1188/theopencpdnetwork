@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Add CPD Provider</title>
</head>
<body>
	<h1>Add CPD Provider</h1>
<form method="POST" action="/cpd_providers">
	{{ csrf_field() }} <!- laravel built in protection>
  <div class="form-group">
    <label for="username">Name</label>
    <input type="text" class="form-control" id="name" name="name" >
  </div> 
   <div class="form-group">
    <label for="validity">Validity</label>
     <input type="date" class="form-control" name="validity">
  </div>   
  <div class="form-group">
    <label for="providerID">Provider ID</label>
    <input type="number" class="form-control" id="provider_id" name="provider_id">
  </div>  
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>  
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="text" class="form-control" id="mobileNumber" name="mobile">
  </div>  
  <input type="hidden" name="created_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</body>
</html>
@endsection
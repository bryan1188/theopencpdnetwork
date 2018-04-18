@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit CPD Provider</title>
</head>
<body>
	<h1>Edit CPD Provider</h1>
<form method="POST" action="/cpd_providers/{{ $cpd_provider->id }}">
	{{ csrf_field() }} <!- laravel built in protection>
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="username">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $cpd_provider->name }}" >
  </div> 
   <div class="form-group">
    <label for="validity">Validity</label>
     <input type="date" class="form-control" name="validity" value="{{ $cpd_provider->validity }}" >
  </div>   
  <div class="form-group">
    <label for="providerID">Provider ID</label>
    <input type="number" class="form-control" id="provider_id" name="provider_id" value="{{ $cpd_provider->provider_id }}">
  </div>  
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" value="{{ $cpd_provider->contact }}">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $cpd_provider->email }}">
  </div>  
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="text" class="form-control" id="mobileNumber" name="mobile" value="{{ $cpd_provider->mobile }}">
  </div> 
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
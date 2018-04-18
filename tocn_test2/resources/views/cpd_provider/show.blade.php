@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--<li>{{  $cpd_provider }}</li> -->

<h1>CPD Provider {{ $cpd_provider->name }}</h1>
  <div class="form-group">
    <label for="username">Name: <b>{{ $cpd_provider->name }} </b> </label>
  </div> 
   <div class="form-group">
    <label for="validity">Validity: <b>{{ $cpd_provider->validity}} </b> </label>
   </div>   
  <div class="form-group">
    <label for="providerID">Provider ID: <b>{{ $cpd_provider->provider_id}} </b> </label>
   </div>  
  <div class="form-group">
    <label for="contact">Contact: <b>{{ $cpd_provider->contact}} </b> </label>
  </div>
  <div class="form-group">
    <label for="email">Email address: <b>{{ $cpd_provider->email}} </b> </label>
   </div>  
  <div class="form-group">
    <label for="mobile">Mobile Number : <b>{{ $cpd_provider->mobile}} </b> </label>
   </div> 
  @auth  
 <form method="GET" action="/cpd_providers/{{ $cpd_provider->id }}/edit">
	{{ csrf_field() }} <!- laravel built in protection>
  <button type="submit" class="btn btn-primary">Edit</button>
  @endauth
</form>

</body>
</html>
@endsection
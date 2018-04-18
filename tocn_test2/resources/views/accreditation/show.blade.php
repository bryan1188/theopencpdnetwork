@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <!--	<li>{{  $accreditation }}</li> -->
<h1>{{ $accreditation->title }}</h1>
  <div class="form-group">
    <label for="title">Title: <b>{{ $accreditation->title}} </b> </label>
   </div>
  <div class="form-group">
    <label for="providerID">Program ID: <b>{{ $accreditation->program_id}} </b></label>
   </div>   
   <div class="form-group">
    <label for="providerID">CPD Provider: 
    	<a href="/cpd_providers/{{ $accreditation->cpd_provider->id }}">
    		<b>{{ $accreditation->cpd_provider->name }} </b>
    	</a>
    </label>
  </div>    
  <div class="form-group">
    <label for="providerID">CPD Units: <b>{{ $accreditation->cpd_units}} </b></label>
   </div>     
   <div class="form-group">
    <label for="validity">Issue Date: <b>{{ $accreditation->issue_date}} </b></label>
   </div>   
   @auth 
	  <form method="GET" action="/accreditations/{{ $accreditation->id }}/edit">
		{{ csrf_field() }} <!- laravel built in protection>
	  <button type="submit" class="btn btn-primary">Edit</button>
		</form>
	@endauth
</body>
</html>
@endsection
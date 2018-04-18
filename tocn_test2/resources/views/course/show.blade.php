@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>Course View</h1>
<h3>{{ $course->accreditation->title }} ({{ $course->run_date }})</h3>
  <div class="form-group">
    <label for="title">Title: <b>{{ $course->accreditation->title}} </b> </label>
   </div>
  <div class="form-group">
    <label for="validity">Run Date: <b>{{ $course->run_date}} </b></label>
   </div>  
   <h5>Units Information</h5>
  <div class="form-group">
    <label for="providerID">Program ID: 
      <a href="/accreditations/{{ $course->accreditation->id }}"> 
        <b>{{ $course->accreditation->program_id}} </b> 
      </a></label>
   </div>   
   <div class="form-group">
    <label for="providerID">CPD Provider: <a href="/cpd_providers/{{ $course->accreditation->cpd_provider->id}}">
       <b>{{ $course->accreditation->cpd_provider->name }} </b>
      </a></label>
  </div>    
  <div class="form-group">
    <label for="providerID">CPD Units: <b>{{ $course->accreditation->cpd_units}} </b></label>
   </div>     
   <div class="form-group">
    <label for="validity">Issue Date: <b>{{ $course->accreditation->issue_date}} </b></label>
   </div>   
   @auth 
	  <form method="GET" action="/courses/{{ $course->id }}/edit">
		{{ csrf_field() }} <!- laravel built in protection>
	  <button type="submit" class="btn btn-primary">Edit</button>
		</form>
	@endauth
</body>
</html>
@endsection
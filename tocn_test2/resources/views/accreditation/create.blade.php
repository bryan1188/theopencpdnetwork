@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Create Units</title>
</head>
<body>
	<h1>Create Units</h1>
 <form method="POST" action="/accreditations">
	{{ csrf_field() }} <!- laravel built in protection>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>
  <div class="form-group">
    <label for="providerID">Program ID</label>
    <input type="number" class="form-control" id="program_id" name="program_id">
  </div>   
   <div class="form-group">
    <label for="providerID">CPD Provider</label>
   <select class="form-control" name="cpd_provider_id">
      @foreach ($cpd_providers as $cpd_provider)
        <option value={{ $cpd_provider->id }}>{{$cpd_provider->name}}</option>
    @endforeach
    </select>
  </div>    
  <div class="form-group">
    <label for="providerID">CPD Units</label>
    <input type="number" class="form-control" id="cpd_units" name="cpd_units" step=".01">
  </div>     
   <div class="form-group">
    <label for="validity">Issue Date</label>
     <input type="date" class="form-control" name="issue_date">
  </div>     
  <input type="hidden" name="created_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

</body>
</html>
@endsection
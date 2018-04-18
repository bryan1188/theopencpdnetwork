@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Create Course</title>
</head>
<body>
	<h1>Create Course</h1>
 <form method="POST" action="/courses">
	{{ csrf_field() }} <!- laravel built in protection>
  <div class="form-group">
    <label for="title">Title</label>
    <select class="form-control" name="accreditation_id">
      @foreach ($accreditations as $accreditation)
        <option value={{ $accreditation->id }}>{{$accreditation->title}}</option>
    @endforeach
    </select>
  </div>  
   <div class="form-group">
    <label for="validity">Run Date</label>
     <input type="date" class="form-control" name="run_date">
  </div>     
  <input type="hidden" name="created_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

</body>
</html>
@endsection
@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Course</title>
</head>
<body>
	<h1>Edit Course</h1>
<form method="POST" action="/courses/{{ $course->id }}">
	{{ csrf_field() }} <!- laravel built in protection>
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="title">Title</label>
    <select class="form-control" name="accreditation_id">
      @foreach ($accreditations as $accreditation)
        <option value={{ $accreditation->id }}
            @if($accreditation->id == $course->accreditation_id )
              selected="selected"
            @endif
          >
          {{$accreditation->title}}</option>
    @endforeach
    </select>    
  </div>  
   <div class="form-group">
    <label for="validity">Run Date</label>
     <input type="date" class="form-control" name="run_date"  value="{{ $course->run_date }}">
  </div>       
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
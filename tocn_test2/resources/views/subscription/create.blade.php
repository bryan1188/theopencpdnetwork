@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Add CPD Units</title>
</head>
<body>
	<h1>Add CPD Units to 
    <a href="/professionals/{{$professional->id}}" >
      {{ $professional->last_name.", ".$professional->first_name }} </a>
  </h1>
 <form method="POST" action="/subscriptions">
	{{ csrf_field() }} <!- laravel built in protection>
  <div class="form-group">
    <label for="title">Title</label>
    <select class="form-control" name="course_id">
      @foreach ($courses as $course)
        <option value={{ $course->course_id }}> {{ $course->title." (".$course->run_date.")"}} </option>
    @endforeach
    </select>
  </div>     
  <div class="form-group">
    <label for="validity">Subscription Date</label>
     <input type="date" class="form-control" name="date">
  </div>  
  <div class="form-group">
    <label for="middleName">Note</label>
    <input type="text" class="form-control" id="middleName" name="note" >
  </div>    
  <input type="hidden" name="created_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="professional_id" value="{{ $professional->id }}">
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</body>
</html>
@endsection
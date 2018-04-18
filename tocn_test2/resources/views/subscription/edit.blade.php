@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Subscription</title>
</head>
<body>
	<h1>Edit CPD Units of 
    <a href="/professionals/{{$subscription->professional->id}}" >
      {{ $subscription->professional->last_name.", ".$subscription->professional->first_name }} </a>
  </h1>
<form method="POST" action="/subscriptions/{{ $subscription->id }}">
	{{ csrf_field() }} <!- laravel built in protection>
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="title">Title</label>
    <select class="form-control" name="course_id" >
      @foreach ($courses as $course)
        <option value={{ $course->course_id }}
           @if($course->id == $subscription->course_id )
              selected="selected"
            @endif
        > {{ $course->title." (".$course->run_date.")"}} </option>
    @endforeach
    </select>
  </div>     
  <div class="form-group">
    <label for="validity">Subscription Date</label>
     <input type="date" class="form-control" name="date" value="{{ $subscription->date }}">
  </div>  
  <div class="form-group">
    <label for="middleName">Note</label>
    <input type="text" class="form-control" id="middleName" name="Note" value="{{ $subscription->Note }}">
  </div>    
  <input type="hidden" name="created_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <input type="hidden" name="professional_id" value="{{ $subscription->professional->id }}">
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
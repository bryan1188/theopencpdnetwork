@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Units</title>
</head>
<body>
	<h1>Edit Units</h1>
<form method="POST" action="/accreditations/{{ $accreditation->id }}">
	{{ csrf_field() }} <!- laravel built in protection>
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  value="{{ $accreditation->title }}">
  </div>
  <div class="form-group">
    <label for="providerID">Program ID</label>
    <input type="number" class="form-control" id="program_id" name="program_id" value="{{ $accreditation->program_id }}">
  </div>   
   <div class="form-group">
    <label for="providerID">CPD Provider</label>
   <select class="form-control" name="cpd_provider_id" >
      @foreach ($cpd_providers as $cpd_provider)
        <option value="{{ $cpd_provider->id }} "
          @if($cpd_provider->id == $accreditation->cpd_provider_id )
            selected="selected"
          @endif
          >
          {{$cpd_provider->name}}
        </option>
    @endforeach
    </select>
  </div>    
  <div class="form-group">
    <label for="providerID">CPD Units</label>
    <input type="number" class="form-control" id="cpd_units" name="cpd_units" step=".01"  value="{{ $accreditation->cpd_units }}">
  </div>     
   <div class="form-group">
    <label for="validity">Issue Date</label>
     <input type="date" class="form-control" name="issue_date"  value="{{ $accreditation->issue_date }}">
  </div>    
  <input type="hidden" name="last_updated_by_id" value={{ Auth::user()->id }}>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
@endsection
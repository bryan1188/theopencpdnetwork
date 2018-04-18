@extends('layout')

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CPD Units</h1>
	@auth
		<form method="GET" action="/accreditation/create">
			<button type="submit" class="btn btn-primary">Add CPD Units</button>
		</form>
	@endauth
	<div >
	<form class="form-horizontal" role="form" method="GET" action="/accreditations/search" enctype="multipart/form-data">    
	    <div class="form-control">
	       <input id="search_text" type="text" class="form-control" name="search_text" value="{{ old('search_text') }}" required autofocus placeholder="Search">          
	     </div>  
	</form>   
	</div>
	 @foreach ($accreditations as $accreditation)
        <li > <a href="/accreditations/{{ $accreditation->id }}"> {{ $accreditation->title }}</a>
        @auth
	        - <a href="/accreditations/{{ $accreditation->id }}/edit"'">Edit</a>
	        |
	        <a href="/accreditations/{{$accreditation->id}}/delete">Delete</a>        	
	        </li>        
        @endauth
    @endforeach

{{ $accreditations->links() }}

</body>
</html>
@endsection
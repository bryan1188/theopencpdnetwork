@extends('layout')

@section ('content')
<!DOCTYPE html>
<html>
<head>	
	<title>Professionals</title>
</head>
<h1>Professionals</h1>
<body>
	@auth
		<form method="GET" action="/professional/create">
			<button type="submit" class="btn btn-primary">Add Professional</button>
		</form>
	@endauth
<div >
	<form class="form-horizontal" role="form" method="GET" action="/professionals/search" enctype="multipart/form-data">    
	    <div class="form-control">
	       <input id="search_text" type="text" class="form-control" name="search_text" value="{{ old('search_text') }}" required autofocus placeholder="Search">          
	     </div>  
	</form>   
</div>
	 @foreach ($professionals as $professional)
        <li > <a href="/professionals/{{ $professional->id }}"> {{ $professional->last_name }}, {{ $professional->first_name }} </a>
        @auth
	        - <a href="/professionals/{{ $professional->id }}/edit"'">Edit</a>
	        |
	        <a href="/professionals/{{$professional->id}}/delete">Delete</a>        	
	        </li>        
        @endauth
    @endforeach

{{ $professionals->links() }}

</body>
</html>
@endsection
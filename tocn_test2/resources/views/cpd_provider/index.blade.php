@extends('layout')

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>CPD Providers</h1>
	@auth
		<form method="GET" action="/cpd_provider/create">
			<button type="submit" class="btn btn-primary">Add CPD Provider</button>
		</form>
	@endauth
	<div >
	<form class="form-horizontal" role="form" method="GET" action="/cpd_providers/search" enctype="multipart/form-data">    
	    <div class="form-control">
	       <input id="search_text" type="text" class="form-control" name="search_text" value="{{ old('search_text') }}" required autofocus placeholder="Search">          
	     </div>  
	</form>   
</div>
	 @foreach ($cpd_providers as $cpd_provider)
        <li > <a href="/cpd_providers/{{ $cpd_provider->id }}"> {{ $cpd_provider->name }}</a>
        @auth
	        - <a href="/cpd_providers/{{ $cpd_provider->id }}/edit"'">Edit</a>
	        |
	        <a href="/cpd_providers/{{$cpd_provider->id}}/delete">Delete</a>        	
	               
        @endauth
         </li>
    @endforeach

{{ $cpd_providers->links() }}
</body>
</html>
@endsection
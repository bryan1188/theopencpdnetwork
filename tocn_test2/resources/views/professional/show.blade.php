@extends ('layout') 

@section ('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> {{ $professional->last_name }}, {{ $professional->first_name }}</h1>
	<div class="form-group">
   @auth
		<form method="GET" action="/professionals/{{$professional->id}}/edit">
			<button type="submit" class="btn btn-primary">Edit</button>
		</form>
	@endauth  
</div>
<div class="form-group">
    <label for="firstName">First Name: <b> {{ $professional->first_name}} </b> </label>
   </div>
  <div class="form-group">
    <label for="middleName">Middle Name: <b> {{ $professional->middle_name}} </b></label>
   </div>  
  <div class="form-group">
    <label for="lastName">Last Name: <b> {{ $professional->last_name}} </b></label>
  </div>
  <div class="form-group">
    <label for="email">Profession: <b> {{ $professional->profession}} </b></label>
  </div>
  <div class="form-group">
    <label for="email">License Number: <b> {{ $professional->license_number}} </b></label>
  </div>  
  <div class="form-group">
    <label for="username">Username: <b> {{ $professional->username}} </b></label>
  </div>     
  <div class="form-group">
    <label for="email">Email address: <b> {{ $professional->email}} </b></label>
  </div>  
  <div class="form-group">
    <label for="email">Mobile Number: <b> {{ $professional->mobile_number}} </b></label>
  </div>  
  <div class="form-group">
    <label for="email">Issue Date: <b> {{ $professional->issue_date}} </b> </label>
   </div> 
   <div class="form-group">
    <label for="email">Expiry Date: <b> {{ $professional->expiry_date}} </b></label>
   </div> 
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>CPD Units - {{ $professional->subscription_views->sum('cpd_units') }}</h2>
 @auth
 <div class="form-group">
		<form method="GET" action="/subscription/{{ $professional->id }}/create">
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	@endauth  
	</div>
<table>
  <tr>
    <th>Title</th>
    <th>Run Date</th>
    <th>Subscription Date</th>    
    <th>CPD Unit</th>
    @auth
    <th>Update</th>
    @endauth
 </tr>  


  @foreach ($professional_subscriptions as $subscription)
   <tr>
	    <td><a href="/courses/{{$subscription->course_id}}"> {{$subscription->title}} </a></td>
	    <td>{{$subscription->run_date }}</td>
	    <td>{{$subscription->date}}</td>
	    <td>{{$subscription->cpd_units}}</td>
	    @auth
    	<td> 
	    	<a href="/subscriptions/{{$subscription->subscription_id}}/edit" >Update </a> 
	    | 
		<a href="/subscriptions/{{$subscription->subscription_id}}/delete" >Delete </a></td>
	    @endauth
   </tr>
  @endforeach  
</table>

{{ $professional_subscriptions->links() }}

</body>
</html>
@endsection
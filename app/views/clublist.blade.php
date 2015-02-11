@extends('layout.default')

@section('mainSection')
<div>
	<button class="pull-right btn btn-default btn-logout">Logout</button>
	<button class="pull-right btn btn-default btn-login gap-right">Profile</button>
</div>
<div class="clearfix"></div>
<br>
<div class="col-md-2 navbar">
	<div class="search-text col-md-11 navbar">
		<a href="{{ URL::to('/') }}"><center><i class="fa fa-home"></i><p style='margin-top:10px'>Club Hub</p></center></a>
	</div>
</div>
<nav class="navbar profileContainer col-md-10 col-sm-12 col-xs-12 pull-right">
  <p class='userName'>Wahid Sherief</p>
  <p class='userAddress'>wahid.sherief@gmail.com</p>
  <p class='userAddress'>Nasirabad,Chittagong</p>
</nav>
<div class="clearfix"></div>
<br>
<div class="searchResultContainer">
<div class="table-responsive"> 
	<table class="table table-bordered searchResultTable">
	    <thead>
	        <tr>
	            <th>Club Name</th>
	            <th>Club Area</th>
	            <th>Available Date</th>
	            <th>Shift</th>
	            <th>Bid</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td>1</td>
	            <td>John</td>
	            <td>Carter</td>
	            <td>johncarter@mail.com</td>
	            <td><button class="btn bid-button">Book Now</button></td>
	        </tr>
	        <tr>
	            <td>2</td>
	            <td>Peter</td>
	            <td>Parker</td>
	            <td>peterparker@mail.com</td>
	            <td><button class="btn bid-button">Book Now</button></td>
	        </tr>
	        <tr>
	            <td>3</td>
	            <td>John</td>
	            <td>Rambo</td>
	            <td>johnrambo@mail.com</td>
	            <td><button class="btn bid-button">Book Now</button></td>
	        </tr>
	    </tbody>
	</table>
	</div>
	</div>
</div>
</div>
@stop
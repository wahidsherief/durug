@extends('layout.default')

@section('mainSection')
<div class="col-md-12">
<p><a href="{{ URL::to('/') }}"><h1  class='pull-right site-name'><i class='fa fa-home'></i> Club Hub</h1></a></p>
<br><br>
<div class="col-md-12">
<div class="col-md-2 navbar">
	<div class="search-text col-md-11 navbar">
		<center><i class="fa fa-search"></i><p style='margin-top:10px'>Find Club</p></center>
	</div>
</div>
<nav class="navbar search-container col-md-10 col-sm-12 col-xs-12 pull-right">
<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
  	<label for="clubname">Club Name</label>
  	<br>
    <input type="text" class="form-control input-sm" placeholder="Search">
  </div>
  <div class="form-group">
  	<label for="clubname">Club Area</label><br>
    <input type="text" class="form-control input-sm" placeholder="Search">
  </div>
  <div class="form-group">
  	<label for="clubname">Date</label><br>
    <input type="text" class="form-control input-sm" placeholder="Search">
  </div>
  <div class="form-group">
  	<label for="clubname">Price</label><br>
    <input type="text" class="form-control input-sm" placeholder="Search">
  </div>
  <button type="submit" class="btn search-button">Search</button>
</form>
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
	            <td>Lorem</td>
	        </tr>
	        <tr>
	            <td>2</td>
	            <td>Peter</td>
	            <td>Parker</td>
	            <td>peterparker@mail.com</td>
	            <td>Vestibulum</td>
	        </tr>
	        <tr>
	            <td>3</td>
	            <td>John</td>
	            <td>Rambo</td>
	            <td>johnrambo@mail.com</td>
	            <td>Integer</td>
	        </tr>
	    </tbody>
	</table>
	</div>
	</div>
</div>
</div>
@stop
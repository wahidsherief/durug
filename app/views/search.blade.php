@extends('layout.default')

@section('mainSection')
<div><button class="pull-right btn btn-default btn-login">Login</button></div>
<div class="clearfix"></div>
<br>
<div class="col-md-2 navbar">
	<div class="search-text col-md-11 navbar">
		<a href="{{ URL::to('/') }}"><center><i class="fa fa-home"></i><p style='margin-top:10px'>Club Hub</p></center></a>
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
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-phone"></i> Enter Your Phone Number</h4>
      </div>
      {{ Form::open() }}
	      <div class="modal-body phoneField">
	        <input type="text" name='mobileNo'>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-site">Save changes</button>
	      </div>
      {{ Form::close() }}
      <div class="modal-header">
      	<h4 class="modal-title"><i class="fa fa-clipboard"></i> Get Registered</h4>
      </div>
      <div class="modal-body registration">
      	{{ Form::open(array('url' => '/registration')) }}
          <input name='phone' type="hidden" value='@if(isset($mobileNo)) {{ $mobileNo }} @endif'>
      		<div class="form-group">
      			<label for="">Choose Your Type</label>  &nbsp;
              @if(isset($usersType))
                @foreach( $usersType as $type )
	      			    <input name='type_id' type="checkbox" class='default-checkbox' value='{{ $type->id }}'> <span>{{ $type->type }}</span> &nbsp;
                @endforeach
      		    @endif
          </div>
      		<div class="form-group">
      			<label for="">User Name</label>
      			<br>
      			<input type="text" class='form-control' name='name'>
      		</div>
          <div class="form-group">
            <label for="">Password</label>
            <br>
            <input type="password" class='form-control' name='password'>
          </div>
      		<div class="form-group">
      			<label for="">Email</label>
      			<br>
      			<input type="email" class='form-control' name='email'>
      		</div>
      		<div class="form-group">
      			<label for="">Address</label>
      			<br>
      			<textarea class='form-control' id="" cols="30" rows="5" name='address'></textarea>
      		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-site">Register</button>
      </div>
      {{ Form::close() }}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@section('js')
<script>
	$(document).ready(function(){
		$('.bid-button').click(function(){
			$('#myModal').modal('show');
		})
	})
</script>
@stop
@stop
<?php

class MainController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function viewRegistrationForm()
	{
		$usersType = UsersType::all();
		$mobileNo = Input::get('mobileNo');

		return View::make('search')
			->with('usersType',$usersType)
			->with('mobileNo',$mobileNo);
	}

	public function doRegistration()
	{
		$userInfo = Input::all();

		$user = new User;

		$user->name = $userInfo['name'];
		$user->user_type_id = $userInfo['type_id'];
		$user->email = $userInfo['email'];
		$user->phone = $userInfo['phone'];
		$user->password = $userInfo['password'];
		$user->address = $userInfo['address'];

		$user->save();
	}

}

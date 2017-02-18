<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', function () {

	$data = User::where([
		'name'     => request('username'),
		'email'    => request('email')
	])->firstorfail();

	if(!password_verify(request('password'), $data->password)){

		return json_encode([
    		'status' => 'failed',
		]);

    }

    return json_encode([
		'status' => 'success',
		'user' => $data
	]);

});

Route::post('/register', function () {

    $data = User::create([
		'name'     => request('username'),
		'email'    => request('email'),
		'password' => bcrypt(request('password'))
	]);

    if(!$data){
    	return json_encode([
    		'status' => 'failed',
		]);
    }

    return json_encode([
		'status' => 'success',
		'message' => 'Registration Complete!'
	]);

});

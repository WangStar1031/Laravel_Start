<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $enc = encrypt('aa');
    echo $enc;
    $dec = decrypt($enc);
    echo "<br/>";
    echo $dec;
    return view('welcome');
});

Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);
Route::get('profile', [
   'middleware' => 'auth',
   'uses' => 'UserController@showProfile'
]);
Route::get('auth/login', function(){
	echo "User Login page.<br>";
	return view('imageview/imageview');
});
Route::get('/foo/bar', 'UriController@index');
Route::get('/register', function(){
	return view('register');
});
Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));
Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');
Route::get('/basic_response', function(){
	return 'Hello World';
});
Route::get('/header', function(){
	return response("Hello", 200)->header('Content-Type', 'text/html');
});
Route::get('/cookie', function(){
	return response("Hello", 200)->header('Content-Type', 'text/html')->withcookie('name', 'Virat Gandhi');
});
Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});
Route::get('/test', ['as'=>'testing', function(){
   return view('test2');
}]);
Route::get('redirect', function(){
	return redirect()->route('testing');
});
Route::get('/test1', function(){
   return view('test');
});

Route::get('/test2', function(){
   return view('test2');
});
Route::get('rr', 'RedirectController@index');
Route::get('/redirectcontroller', function(){
	return redirect()->action('RedirectController@index');
});

Route::get('insert', 'StudInsertController@insertform');
Route::post('create', 'StudInsertController@insert');
Route::get('view_records', 'StudViewController@index');
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
Route::get('delete-records', 'StudDeleteController@index');
Route::get('delete/{id}', 'StudDeleteController@destroy');
Route::get('form', function(){
	return view('form');
});
Route::get('localization/{locale}','LocalizationController@index');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('ajax',function(){
   return view('message');
});
Route::post('/getmsg','AjaxController@index');
// Route::post('getmsg', function(){
// 	$msg = "This is a simple message.";
// 	return response()->json(array('msg'=>$msg), 200);
// });
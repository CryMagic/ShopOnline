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
    return view('welcome');
});

Route::get('/demo',function(){
	echo "<form method='POST' action='/delete-method'>";
	echo csrf_field();
	echo method_field('DELETE');
	echo "<input type='submit' value='click'>";
	echo "</form>";
});
Route::post('/post-method',function(){
	return "Đây là phương thức POST";
});
Route::patch('/patch-method',function(){
	return "Đây là phương thức PATCH";
});
Route::delete('/delete-method',function(){
	return "Đây là phương thức DELETE";
});



Route::get('user/{id}/{name}',function($id,$name){
	return "user :".$id .$name;
})->where(['id'=> '[0-9]+', 'name'=>'[a-z]+']);


Route::get('user/profile',['as'=>'profile',function(){
	return "Hello";
}]);
Route::get('hello',function(){
	return redirect()->route('profile');
});




Route::get('test','TestController@getIndex');

Route::resource('rest','RestController');

// Route::get('/call-view',function(){
// 	return view('greeting');
// });
Route::get('/call-subview',function(){
	return view('subview.sub');
});

Route::get('/call-view','TestController@getCallView');


Route::get('/view-exists',function(){
	if(view()->exists('gree'))
	{
		return view('gree');
	}
	else
		return "Không tồn tại View";
});

// Route::get('/pass-data',function(){
// 	$data = "Hieu";
// 	return view('greeting')->with('name',$data);
// });
Route::get('/pass-data',function(){
	$data = "Hieu";
	return view('greeting',['name'=>$data]);
});


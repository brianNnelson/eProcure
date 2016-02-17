<?php



// ==================================
// BASIC AUTH =======================
// ==================================

// Route::get('login', ['middleware' => 'auth.basic', function(){

//     return view('login.main');
// }]);

// Route::get('admin', function (){
// 	return view('admin.main');
// });
Route::group(['middleware' => 'web'], function() {
	Route::controllers([
		'auth' 		=> 'Auth\AuthController',
		'password' 	=> 'Auth\PasswordController',
	]);

    Route::get('{provider}/authorize', 'Auth\AuthController@redirectToProvider');
    Route::get('{provider}/login', 'Auth\AuthController@handleProviderCallback');

	Route::group(['middleware' => 'auth'], function() {

		//Route::resource('admin/users', 'AdminUserController');

		Route::resource('blocks', 'blocksController');

		Route::resource('custodians', 'custodiansController');

		Route::resource('exchanges', 'exchangesController');

		Route::resource('needs', 'needsController');

		Route::post('notes/{block_id}', 'notesController@store');

		Route::resource('notes', 'notesController');

		Route::resource('reps', 'repsController');

	});
});
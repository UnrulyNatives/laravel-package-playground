<?php 

// Route::get('helperstimezones/{timezone}', 
//   'UnrulyNatives\Helpers\HelpersController@index');


// Route::get('timezones/{timezone}', 
//   'unrulynatives\helpers\HelpersController@index');


Route::group(['middleware' => ['web']], function () {

	Route::get('timezones/{timezone?}', 
	  'laraveldaily\timezones\TimezonesController@index');

});
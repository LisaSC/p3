<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('index');
});

Route::get('/lorem', function(){
	return View::make('lorem');
});

Route::post('/lorem', function(){
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs('num_paragraphs');
	$lorem = implode('<p>', $paragraphs);
	return View::make('lorem')->with('lorem', $lorem);
});

Route::get('/users', function(){
	return View::make('users');
});

Route::post('/users', function(){
	// use the factory to create a Faker\Generator instance
	$faker = fzaninotto\Faker\Factory::create();
	$users = '';
	// generate data by accessing properties
	for($i=0; $i<Input::get('num_users'); $i++){
		$users.='<b>'.$faker->name.'</b><br>';
		if(Input::get('add_birthday')){
			$users.=$faker->date($format = 'Y-m-d', $max = 'now').'<br>';
		}
		$users.='<br>';
	}
	return View::make('users')->with('users', $users);
});
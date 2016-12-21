<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    return view('welcome');


});


//Route::get('/pages/about', function () {
    
	//$people = ['Tong', 'Ling', 'Gary'];


    //return view('pages.about', compact('people')); // resources/views/pages/about.blade.php

    //return view('pages.about')->with(['people' => $people]);

    //return view('pages.about')->with('people', $people);  
    
    //return view('pages.about', ['people' => $people]);

    //return view('pages.about')->withPeople($people);

//});

Route::get('home', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('welcome', 'PagesController@welcome');

Route::get('example', 'PagesController@example');

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');





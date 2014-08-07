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

Route::get('/', function()
{
	return View::make('landing');
});


Route::post('/create', function()
{
	return View::make('createSurvey');
});


Route::get('/mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($results);

});


Route::post('/addPoll', array('uses' => 'addRowsController@addRows'));

Route::post('/addPollsTaken', array('uses' => 'pollSubmitController@addPollsTaken'));

Route::get('/polls/title/{pollTitle}', array('uses' => 'PollController@titleSearch'));

Route::post('/polls/title', function(){
	$pollTitle = $_POST['pollTitle'];
	return Redirect::action('PollController@titleSearch',array('pollTitle' => $pollTitle));
});

Route::post('/enterTitle', function(){
	return View::make('enterTitle');
});

Route::get('/confirmation',function(){
	
	$pollTitle = Session::get('pollTitle');
	return View::make('insertConfirmation',array('pollTitle' => $pollTitle));
});

Route::get('/pollSubmitConfirmation',function(){
	
	$pollTitle = Session::get('pollTitle');
	return View::make('pollSubmitConfirmation',array('pollTitle' => $pollTitle));
});









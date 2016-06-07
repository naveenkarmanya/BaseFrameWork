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
Route::get('Step1', 'AdminLTEController@register');
Route::any('Step2', array(
    'as' => 'registersubmit',
    'uses' => 'AdminLTEController@registerSubmit'
));
Route::get('Step2/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'AdminLTEController@confirm'
]);

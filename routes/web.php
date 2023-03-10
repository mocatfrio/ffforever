<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route wedding invitation 
Route::get('/wedding-invitation/{id}', 'WeddingInvitationController@wedding_invitation');
Route::post('/save-rsvp', 'WeddingInvitationController@save_rsvp');
Route::post('/save-message', 'WeddingInvitationController@save_message');

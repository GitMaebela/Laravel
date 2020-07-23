<?php

use Illuminate\Support\Facades\Route;


// Render in view
Route::get('/contact', [
    'uses' => 'FormValidtionController@createForm'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'FormValidtionController@ContactUsForm',
    'as' => 'contact.store'
]);

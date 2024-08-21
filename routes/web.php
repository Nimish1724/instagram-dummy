<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/react-app/{any}', function () {
    return view('app'); // Make sure to create a view for serving the React app
})->where('any', '.*');

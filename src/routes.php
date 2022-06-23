<?php 
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('/test-load', function () {
        return response()->json(['test','123123']);
    });

    Route::get('/test-load-template', function () {
        return view('first-package::index.blade.php');
    });
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->name('admin.')->group(function(){
    require __DIR__.'/admin.php';
});


//require __DIR__.'/auth.php';

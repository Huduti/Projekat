<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZaposleniController;

Route::get('/', function () {
    return redirect()->route('zaposleni.index');
});

Route::resource('zaposleni', ZaposleniController::class);

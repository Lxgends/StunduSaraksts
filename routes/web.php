<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/main', function () {
    return Inertia::render('main');
});

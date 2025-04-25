<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sistem/odoo', function () {
    return view('odoo');
});

Route::get('/sistem/chaakra-custom', function () {
    return view('chaakra-custom');
});

Route::get('/layanan', function () {
    return view('layanan');
});

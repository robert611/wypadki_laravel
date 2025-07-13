<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-pdf', [PdfController::class, 'generateFromHtml']);

Route::get('/display-html', [PdfController::class, 'displayHTML']);


<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-accident-card', [PdfController::class, 'generateAccidentCardPdf']);
Route::get('/generate-after-accident-protocol', [PdfController::class, 'generateAfterAccidentProtocolPdf']);
Route::get('/generate-accidents-register', [PdfController::class, 'generateAccidentsRegisterPdf']);

Route::get('/display-accident-card', [PdfController::class, 'displayAccidentCard']);
Route::get('/display-after-accident-protocol', [PdfController::class, 'displayAfterAccidentProtocol']);
Route::get('/display-accidents-register', [PdfController::class, 'displayAccidentsRegister']);


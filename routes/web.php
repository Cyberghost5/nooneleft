<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PartnerInquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/partner-inquiry', [PartnerInquiryController::class, 'store'])->name('partner.store');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

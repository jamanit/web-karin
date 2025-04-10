<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::post('/inboxes/store', [App\Http\Controllers\HomeController::class, 'inbox_store'])->name('inboxes.store');

Route::get('/premium-applications', [App\Http\Controllers\HomeController::class, 'premium_application'])->name('premium_applications.index');
Route::get('/premium-applications/show/{id?}', [App\Http\Controllers\HomeController::class, 'premium_application_show'])->name('premium_applications.show');

Route::post('/invitations/send_message', [App\Http\Controllers\HomeController::class, 'send_message'])->name('invitations.send_message');
Route::get('/invitations/get_message', [App\Http\Controllers\HomeController::class, 'get_message'])->name('invitations.get_message');
Route::get('/{invitation_id?}/{wedding_couple_name?}/{guest_name?}', [App\Http\Controllers\HomeController::class, 'invitaion_show'])->name('invitations.show');

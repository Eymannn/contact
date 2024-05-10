<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\ContactController;

Route::get('/', function () {return view('welcome');});


Route::get('/contact-list', [ContactController::class, 'index'])->name('contact-list');


Route::get('/contact/{id}', [ContactController::class , 'show']);


Route::get('/contact/{id}/edit', [ContactController::class , 'edit']);


Route::patch('/contact/{id}/', [ContactController::class , 'update']);


Route::delete('/contact/{id}',[ContactController::class , 'softDelete']);


Route::delete('/contact/{id}/force',[ContactController::class, 'forceDelete'])->name('contact.forcedelete');


Route::get('/contact/{id}/restore', [ContactController::class ,'restore'])->name('contact.restore');


Route::get('/search' , [ContactController::class , 'search'])->name('search');


Route::post('contact-list', [ContactController::class, 'store']);


Route::put('contact-list', [ContactController::class, 'store']);









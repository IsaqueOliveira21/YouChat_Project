<?php

use App\Http\Controllers\MensagemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('postLogin', [UserController::class, 'postLogin'])->name('user.postLogin');

Route::get('index', [UserController::class, 'index'])->name('user.index');


Route::post('sendMessage', [MensagemController::class, 'sendMessage'])->name('message.store');

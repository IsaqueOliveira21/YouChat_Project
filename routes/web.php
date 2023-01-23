<?php

use App\Http\Controllers\MensagemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('postLogin', [UserController::class, 'postLogin'])->name('user.postLogin');
Route::get('logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('index', [UserController::class, 'index'])->name('user.index');


Route::get('chat', [MensagemController::class, 'index'])->name('mensagem.index');
Route::post('store', [MensagemController::class, 'store'])->name('mensagem.store');

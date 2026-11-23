<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/what-is-zoogol', [PageController::class, 'whatIsZoogol'])->name('what-is-zoogol');
Route::get('/why-zoogol', [PageController::class, 'whyZoogol'])->name('why-zoogol');
Route::get('/how-to-start', [PageController::class, 'howToStart'])->name('how-to-start');
Route::get('/how-zoogol-works', [PageController::class, 'howZoogolWorks'])->name('how-zoogol-works');
Route::get('/refer-and-earn', [PageController::class, 'referAndEarn'])->name('refer-and-earn');

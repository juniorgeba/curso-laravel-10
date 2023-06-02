<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;


Route::get('/', function () {return view('welcome');});

Route::get('/contato', [SiteController::class, 'contact']);




<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos',ProdutoController::class);

Route::resource('teste',ProdutoController::class);


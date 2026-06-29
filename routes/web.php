<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class,("home")])->name("home");

// Article Create
Route::get("/articles/create",[ArticleController::class,("create")])->name("article.create")->middleware("auth");


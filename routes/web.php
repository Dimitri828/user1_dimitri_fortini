<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class,("home")])->name("home");

// Article Create
Route::get("/articles/create",[ArticleController::class,("create")])->name("article.create")->middleware("auth");
// Article Index
Route::get("/articles/index",[ArticleController::class,("index")])->name("article.index");
// Article Show
Route::get("/articles/show/{article}",[ArticleController::class,("show")])->name("article.show")->middleware("auth");
// Filterd By Category
Route::get("/articles/category/{category}",[ArticleController::class,("filteredByCategory")])->name("article.category")->middleware("auth");
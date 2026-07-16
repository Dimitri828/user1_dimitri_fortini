<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewerController;
use App\Mail\ReviewerApplicationMail;
use App\Models\Reviewer;

Route::get('/', [PublicController::class, ("home")])->name("home");

// Article Create
Route::get("/articles/create", [ArticleController::class, ("create")])->name("article.create")->middleware("auth");
// Article Index
Route::get("/articles/index", [ArticleController::class, ("index")])->name("article.index");
// Article Show
Route::get("/articles/show/{article}", [ArticleController::class, ("show")])->name("article.show");
// Filterd By Category
Route::get("/articles/category/{category}", [ArticleController::class, ("filteredByCategory")])->name("article.category");
// Review  TODO rendere raggiungibile solo dai reviewer
Route::get("/articles/review",[ReviewerController::class,("review")])->name("article.review")->middleware(["auth","reviewer"]);

// Review-buttons
Route::put("/articles/review/accept/{article}",[ReviewerController::class,("accept")])->name("review.accept");
Route::put("/articles/review/reject/{article}",[ReviewerController::class,("reject")])->name("review.reject");
Route::put("/articles/review/undo/{article}",[ReviewerController::class,("undo")])->name("review.undo");

// Work with us
Route::get("/join-us" ,[ReviewerController::class,("joinUs")])->name("joinUs")->middleware("auth");

// Make Reviewer

Route::get("/make/reviewer/{reviewer}", [ReviewerController::class,("makeReviewer")])->name("make.reviewer");

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function create()
    {
        $categories = Category::all();
        return view("article.create", compact("categories"));
    }

    public function index()
    {
        $articles = Article::all()->sortByDesc("updated_at");
        return view("article.index", compact("articles"));
    }

    public function show(Article $article)
    {

        return view("article.show", compact("article"));
    }

    public function filteredByCategory(Category $category){
        $articles=Article::where("category_id",$category->id)->get();

        return view("article.category", compact("articles","category"));
    }
}

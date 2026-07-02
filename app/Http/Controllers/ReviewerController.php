<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewerController extends Controller
{
    public function review(){
        $article=Article::where("review_status","pending")->oldest()->first();
        if (!$article) {
            return redirect()->route("home")->with("message","Non ci sono articoli da revisionare");
        }
        return view("article.review",compact("article"));
    }

    public function accept(Article $article){
        $article->update([
            "review_status"=> "accepted",
            "reviewed_by"=> auth()->id(),
        ]);
        return redirect()->route("article.review");
    }

    public function reject(Article $article){
        $article->update([
            "review_status"=> "rejected",
            "reviewed_by"=> auth()->id(),
        ]);
        return redirect()->route("article.review");
    }

    public function undo(){
        $article= Article::where("reviewed_by", auth()->id())
        ->latest("updated_at")
        ->first();

        if (!$article) {
            return redirect()->back()->with("message", "Nessuna operazione da annullare.");
        }

        $article->update([
            "review_status"=>"pending",
            "reviewed_by"=>null,
        ]);

        return redirect()->route("article.review")->with("message","Ultima operazione annullata.");
    }

    public function joinUs(){
        return view("join-us");
    }
     
}

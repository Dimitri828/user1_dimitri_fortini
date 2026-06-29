<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


class ModalUpdate extends Component
{
    public Article $article;
    public $categories = [];
    #[Validate('required', message: "Il campo è obbligatorio.")]
    public $name;
    #[Validate('required', message: "Il campo è obbligatorio.")]
    public $description;
    #[Validate('required', message: "Il campo è obbligatorio.")]
    public $price;
    #[Validate('required', message: "Seleziona almeno una categoria.")]
    public $category_id;
    public $user_id;
    public $category;
    public $user;

    public function mount(Article $article)
    {
        $this->categories = Category::all();
        $this->article = $article;
        $this->name = $article->name;
        $this->description = $article->description;
        $this->price = $article->price;
        $this->category_id = $article->category_id;
        $this->user = $article->user->name;
    }
    public function update()
    {
        $this->validate();

        $this->article->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,

        ]);;

        return redirect()->to("/articles/index")->with("message", "Annuncio modificato con successo.");
    }
    public function render()
    {
        return view('livewire.modal-update');
    }
}

<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class FormCreate extends Component
{   
    public $categories=[];
    #[Validate('required', message:"Il campo è obbligatorio.")] 
    public $name;
    #[Validate('required',message:"Il campo è obbligatorio.")] 
    public $description;
    #[Validate('required',message:"Il campo è obbligatorio.")] 
    public $price;
    #[Validate('required',message:"Seleziona almeno una categoria.")] 
    public $category_id;
    public $user_id;

    public function store(){
    $this->validate();



    Article::create([
        "name"=>$this->name,
        "description"=>$this->description,
        "price"=>$this->price,
        "category_id"=>$this->category_id,
        "user_id"=>Auth::id(),
    ]);
    $this->resetForm();
    session()->flash("message","Annuncio creato con successo.");
    
    
    }

    public function resetForm(){
        $this->name="";
        $this->description="";
        $this->price="";
        $this->category_id="";
    }

    public function render()
    {
        

        return view('livewire.form-create');
    }
}

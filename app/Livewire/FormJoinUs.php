<?php

namespace App\Livewire;

use App\Mail\ReviewerApplicationMail;
use App\Models\Reviewer;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Validate;

class FormJoinUs extends Component
{
    #[Validate("required|email", message: [
        "required" => "Il campo è obbligatorio.",
        "email" => "Inserisci un indirizzo email valido",
    ])]
    public $email;
    #[Validate("required", message: "Il campo è obbligatorio.")]
    public $english_level = "A1";
    #[Validate("required", message: "Il campo è obbligatorio.")]
    public $experience ="none";



    public function render()
    {
        return view('livewire.form-join-us');
    }

    public function submitApplication()
    {
        $this->validate();

        $reviewer=Reviewer::create([
            "email" => $this->email,
            "english_level" => $this->english_level,
            "experience" => $this->experience,
        ]);
        
        Mail::to($this->email)->send(new ReviewerApplicationMail($reviewer));
        session()->flash("message","Candidatura inviata correttamente, sarai contattato all'email fornita.");
    }
}

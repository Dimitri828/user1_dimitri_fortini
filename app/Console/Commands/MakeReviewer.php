<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use App\Models\User;

#[Signature('app:make-reviewer')]
#[Description('Command description')]
class MakeReviewer extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email=$this->ask("inserisci la mail dell'utente");
        $user=User::where("email",$email)->first();
        if (!$user) {
            $this->error("Utente non trovato.");
            return;
        }
        $user->reviewer =true;
        $user->save();
        $this->info("L'utente è stato reso Revisore.");
    }
}



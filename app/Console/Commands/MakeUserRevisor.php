<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    protected $signature = 'user:make-revisor {email}';
    protected $description = 'Promote a user to revisor';

    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();

        if (!$user) {
            $this->error('Utente non trovato.');
            return;
        }

        $user->is_revisor = true;
        $user->save();

        $this->info("{$user->name} è ora un revisore!");
    }
}

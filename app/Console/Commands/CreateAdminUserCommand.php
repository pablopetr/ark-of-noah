<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUserCommand extends Command
{
    protected $signature = 'create:admin-user';

    protected $description = 'Command description';

    public function handle(): void
    {
        User::create([
            'name' => 'Pablo Eliezer',
            'email' => 'pabloeliezer@hotmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
    }
}

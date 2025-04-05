<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->make([
            'email' => 'pabloeliezer@hotmail.com',
            'password' => bcrypt('password'),
        ]);

        User::query()->updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'password' => $user->password,
            'email_verified_at' => now(),
        ]);

        Article::factory()->count(30)->create();
        Project::factory()->count(30)->create();
    }
}

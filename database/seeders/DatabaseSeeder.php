<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Fj Nebrida',
            'email' => 'fjnebrida@example.com',
            'password' => bcrypt('123admin'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->Tasks()
            ->create()
            ->count();

        Task::factory()
        ->Project()
        ->create()
        ->count();
    }
}

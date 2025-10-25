<?php

namespace Database\Seeders;

use App\Models\Admin;
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

        // make admin user
        Admin::query()
            ->create([
                'nic' => '1234567890',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone_number' => '0712345678',
                'password' => bcrypt('password'),
            ]);
    }
}

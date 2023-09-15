<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('sercret')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Employee',
            'email' => 'employee@gmail.com',
            'username' => 'employee',
            'password' => Hash::make('secret')
        ]);
        \App\Models\User::factory(100)->create();
        $roles = \App\Models\Role::factory(5)->create();

        \App\Models\User::All()->each(function ($user) use ($roles) {
            $user->roles()->saveMany($roles);
        });
    }
}

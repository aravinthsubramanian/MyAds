<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        $user = User::create([
            'name' => 'Admin',
            'email' => 'ambiadmin@yopmail.com',
            'address'=>'05,india',
            'password' => Hash::make('Abcd1234@'),
            'type' => 1,
         ]);
    }
}

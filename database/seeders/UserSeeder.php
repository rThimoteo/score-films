<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Rodrigo',
            'username' => 'rodrigo',
            'password' => Hash::make('123@mudar')
        ]);

        User::firstOrCreate([
            'name' => 'Gabriele',
            'username' => 'gabi',
            'password' => Hash::make('Ornitorrinco987!')
        ]);
    }
}

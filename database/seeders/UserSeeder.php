<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Concerns\LoadsOptionalSeederData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    use LoadsOptionalSeederData;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = $this->loadOptionalSeederData('users.php');

        foreach ($users as $user) {
            if (! isset($user['username'], $user['password'])) {
                continue;
            }

            User::updateOrCreate(
                ['username' => $user['username']],
                [
                    'name' => $user['name'] ?? $user['username'],
                    'password' => Hash::make($user['password']),
                ]
            );
        }
    }
}

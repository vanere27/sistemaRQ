<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SanctumUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'Usuario Sanctum',
            'email' => 'sanctum@example.com',
            'password' => Hash::make('password'),
        ]);

        // Generar token personal
        $token = $user->createToken('api-token')->plainTextToken;

        echo "TOKEN_SANCTUM={$token}\n";
    }
}

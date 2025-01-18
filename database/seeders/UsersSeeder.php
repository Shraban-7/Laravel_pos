<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'username' => 'admin_user',
                'slug' => Str::slug('admin_user'),
                'email' => 'admin@example.com',
                'phone' => '1234567890',
                'first_name' => 'Admin',
                'last_name' => 'User',
                'avatar' => null,
                'user_type' => UserType::ADMIN,
                'status' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'moderator_user',
                'slug' => Str::slug('moderator_user'),
                'email' => 'moderator@example.com',
                'phone' => '1234567891',
                'first_name' => 'Moderator',
                'last_name' => 'User',
                'avatar' => null,
                'user_type' => UserType::MODERATOR,
                'status' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'super_admin_user',
                'slug' => Str::slug('super_admin_user'),
                'email' => 'superadmin@example.com',
                'phone' => '1234567892',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'avatar' => null,
                'user_type' => UserType::SUPER_ADMIN,
                'status' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'regular_user',
                'slug' => Str::slug('regular_user'),
                'email' => 'user@example.com',
                'phone' => '1234567893',
                'first_name' => 'Regular',
                'last_name' => 'User',
                'avatar' => null,
                'user_type' => UserType::USER,
                'status' => true,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

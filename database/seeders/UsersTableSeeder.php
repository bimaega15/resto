<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $pelayanRole = Role::where('name', 'pelayan')->first();
        $chefRole = Role::where('name', 'chef')->first();

        $admin = User::create([
            'name' => 'Admin Users',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        $author = User::create([
            'name' => 'Author Users',
            'email' => 'author@author.com',
            'password' => Hash::make('password'),
        ]);
        $user = User::create([
            'name' => 'Generic Users',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($pelayanRole);
        $user->roles()->attach($chefRole);
    }
}

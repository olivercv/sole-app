<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Oliver Camacho';
        $user->email = 'olivercv@gmail.com';
        $user->password = bcrypt('admin');
        $user->email_verified_at = '2023-05-24';
        $user->remember_token = 'nNFhKn76Oli';
        $user->save();
    }
}

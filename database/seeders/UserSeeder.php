<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Enums\Status;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $user = new User([
            'name' => '',
            'email' => 'admin@localhost.com',
            'password' => Hash::make('1234567890'),
            'status' => Status::ACTIVE,
        ]);

        $user->assignRole(Roles::SUPERADMIN);
        $user->save();

    }
}

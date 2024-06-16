<?php

namespace Database\Seeders;

use App\Enums\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $roles = Roles::cases();

        foreach ($roles as $role) {
            Role::create([
                'name' => $role->value
            ]);
        }
    }
}

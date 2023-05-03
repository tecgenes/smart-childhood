<?php

namespace Database\Seeders;

use App\Enums\RoleEnums;
use App\Overrides\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = RoleEnums::cases();

        foreach ($roles as $role){
            Role::create([
                'guard_name' => 'web',
                'name' => $role,
            ]);
        }
    }
}

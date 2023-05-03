<?php

namespace Database\Seeders;

use App\Enums\PermissionEnums;
use App\Overrides\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class WebPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // All Web Permissions List
        $permissions = PermissionEnums::cases();

        foreach ($permissions as $permission){
            Permission::create([
                'guard_name' => 'web',
                'name' => $permission,
                ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Enums\RoleEnums;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MasterAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = User::create([
            'name' => "Marwan Sallum",
            'email' => "masalloum2091@gmail.com",
            'mobile' => "0544075175",
            'password' => Hash::make('password'),
            "email_verified_at" => now(),
            "mobile_verified_at" => now(),
        ]);
        $master->assignRole([RoleEnums::MASTER_ADMIN->value]);
    }
}

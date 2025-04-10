<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role jika belum ada 
        $RoleAdmin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $RoleUser  = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        $permissions = Permission::pluck('name')->toArray();
        $RoleAdmin->syncPermissions($permissions);

        $user = User::find(1);
        if ($user) {
            $user->assignRole('admin');
        }
    }
}

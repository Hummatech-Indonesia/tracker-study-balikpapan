<?php

namespace Database\Seeders;

use Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Provider\Uuid;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Assuming you have roles created already
        $roles = Role::all();

        foreach ($roles as $role) {
            $user = User::create([
                'id' => Uuid::uuid(),
                'name' => $role->name,
                'email' => str_replace(' ', '', $role->name) . "@gmail.com",
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
            // Use attach to assign roles
            DB::table('model_has_roles')->insert([
                'model_id' => $user->id,
                'model_type' => User::class,
                'role_id' => $role->uuid,
            ]);
        }
    }
}

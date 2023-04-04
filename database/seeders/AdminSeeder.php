<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $user=User::create([
            'name'=>'Admin',
            'email'=>'Admin@Admin.Admin',
            'password'=>bcrypt('1234567890Aa')
        ]);
        
        $user->assignRole('Admin');
    }
}

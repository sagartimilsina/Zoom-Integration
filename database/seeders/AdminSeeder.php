<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = "Sagar Timilsina";
        $user->email = "timilsinasagar04@gmail.com";
        $user->password = Hash::make('sagar@gmail');
        $role = Role::where('name','admin')->first();
        if($role){
            $user->role_id = $role->id;
            $user->save();
        }
        else{
            abort('404');
        }

    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('admin');;

        $user = new User();
        $user->name = 'Md Parvej';
        $user->email = 'pj.parvaz45@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->assignRole('buyer');
    }
}

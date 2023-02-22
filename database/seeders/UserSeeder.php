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

<<<<<<< HEAD
        //Dummy admin 
=======
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('admin');;

>>>>>>> 3ccbfa2d3d066a269e9837286110e31a44c999cb
        $user = new User();
        $user->name = 'Md Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
<<<<<<< HEAD
        $user->assignRole('admin');
        
        //Dummy manager 
        $user = new User();
        $user->name = 'Md Manager';
        $user->email = 'manager@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->assignRole('manager');

        
        //Dummy editor 
        $user = new User();
        $user->name = 'Md Editor';
        $user->email = 'editor@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->assignRole('editor');



        //Dummy seller 
        $user = new User();
        $user->name = 'Md Seller';
        $user->email = 'seller@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->assignRole('seller');


        //Dummy buyer 
        $user = new User();
        $user->name = 'Md Buyer';
        $user->email = 'buyer@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
=======
>>>>>>> 3ccbfa2d3d066a269e9837286110e31a44c999cb
        $user->assignRole('buyer');
    }
}

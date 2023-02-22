<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //store user data method
    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $ext = $request->image->extension();
        $imgName = $user->email;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:3000',
            'name' => 'required|max:255',
            'dateofbirth' => 'required',
            'phone' => 'required|numeric|min:11',
            'address' => 'required|min:50'
        ]);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->image = $this->imgNameGenator($imgName, $ext);
        $user->save();

        return back();
    }








    //image url generator
    private function imgNameGenator($email, $ext)
    {
        $imageUrl = $email;
        $couunt = User::where('email', 'LIKE', '%' . $imageUrl . '%')->count();
        if($couunt > 0){
            $imageUrl = $imageUrl . $couunt++ . '.' . $ext;
        }
        return $imageUrl;
    }
}

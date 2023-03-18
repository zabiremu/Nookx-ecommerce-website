<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public function createComment(Request $request, $id)
    {

        $request->validate([
            'comment' => 'required',
        ]);
       $user = Auth::user();

       // dd($request->all());
//        dd($user);
        // $product = Product::find($id);
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->product_id = $id;
        $comment->comment = $request->comment;
        $comment->save();
        return back();



    }
}

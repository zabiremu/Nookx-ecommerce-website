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
        // dd($request);
        $request->validate([
            'comment' => ['required'],
        ]);
        $user = Auth::user();
        $product = Product::find($id);
        dd($product);
        $comment = new Comment();
        $comment->user_id = $user->id;
         

    }
}

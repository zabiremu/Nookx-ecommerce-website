<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function datastore($request , $categories){
        $categories->title = $request->title;
        $categories->slug = $this->uniqeslug($request->title, $request->slug);
        $categories->save();
        return  redirect()->back();
    }
    private function uniqeslug($title , $slug){
        if(!$slug){
            $newslug =  str()->slug($title);
        }else{
            $newslug =  str()->slug($slug);
        }
        $count= Category::where('slug', 'like', '%'. $newslug . '%' )->count();

        if($count > 0){
            $newslug = $newslug . '-'.$count++;
        }

        return $newslug;


    }
    public function Categoryadd()
    {
        // data featch
        $categories = Category::all();
        return view('backend.category.category', compact('categories'));
    }


    // category data store
    public function Categorystore(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'slug' => 'unique:categories,slug'
        ]);

        $categories = new Category();
        $this->datastore($request, $categories);
        return back();

    }

    // category edit
    public function Categoryedit(Category $editeCategory)
    {
    $categories = Category::all();
    return view('backend.category.category',compact('editeCategory','categories'));
    }

    // category update
    public function Categoryupdate(Request $request, Category $Category)
    {


        $request->validate([
            'title' => 'required',
            'slug' =>'required'
        ]);


            $this->datastore($request, $Category);
            return back();
    }

    public function Categorydelete(Category $category)
    {
        $category->delete();
        return  redirect()->back();
    }
}

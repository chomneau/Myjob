<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showcategory()
    {
        $category = Category::orderBy('id')->get();
        return view('category')->with('category', $category);
    }


    public function showCategoryForm()
    {
        return view('category');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'category'=>'required'
        ]);

        $category = new Category();

        $category->name = $request->input('category');
//        $category->admin_id = $request->input('adminid');
       // $category->admin_id = Auth::guard()->admin()->id;
        $category->save();

        return redirect('admin/showcategory')->with('success', 'location added');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('editCategory')->with('category', $category);
    }
}

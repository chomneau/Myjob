<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $category = Category::orderBy('created_at', 'Decs')->get();
        return view('admin.category.index')->with('category', $category);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category'=>'required'
        ]);

        $category = new Category();
        $category->name = $request->category;
        $category->admin_id = auth::user()->id;
        $category->save();

        Session::flash('success', 'You successfully added new category!');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}

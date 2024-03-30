<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CategoryController extends Controller
{
    function category(){
        return view('admin.category.category');
    }


    function category_store(Request $request){
        
        $request->validate([
            'category_name'=>'required',
        ]);
      category::insert([
        'category_name'=>$request->category_name,
        'created_at'=>Carbon::now(),
      ]);

      return back()->with('cat_add', 'Category Added Successfully');
    }
}

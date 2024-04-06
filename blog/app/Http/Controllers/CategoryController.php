<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;





class CategoryController extends Controller
{
    function category(){
        $categories = category::all();
        return view('admin.category.categories',[
            'categories'=>$categories,


        ]);

    }


    function category_store(Request $request){

        $request->validate([
            'category_name'=>'required',
            'cat_image' =>'required'
        ]);


        // $category_id = Category::insertGetId([
        //     'category_name'=>$request->category_name,
        //     'created_at'=>Carbon::now(),
        // ]);

        $category = category::create($request->except('_token')+[
            'cat_image'=>'anything photo',
            'category_id'=>Auth::id(),
            'created_at'=>now(),
        ]);

        // if ($request->hasFile('cat_image')) {
            $manager = new ImageManager(new Driver());
            $img_extension = $request->file('cat_image')->getClientOriginalExtension();
            $new_name = date('YmdHis')."_".Auth::id().".".$img_extension;
            $img = $manager->read($request->file('cat_image'));
            // ->resize(370,250)
            if ($img_extension == "png") {
                $img->toPng(80)->save(base_path('public/uploads/category_image/'.$new_name));
            } else {
                $img->toJpeg(80)->save(base_path('public/uploads/category_image/'.$new_name));
            }
            category::find($category->id)->update([
                'cat_image'=>$new_name,
            ]);
            return back()->with('catdone', 'category Updated Successfully');








    }

    function category_delete($category_id){
        category::find($category_id)->delete();
        return back()->with('categorydelete', 'categoty deleted successfull');
         }

         function category_edit($category_id){
$category = category::find($category_id);
            return view('admin.category.edit',[
                'category' =>$category,
            ]);

             }

             function category_update(Request $request){
             if($request->cat_image == ''){
                Category::find($request->category_id)->update([
                    'category_name'=>$request->category_name,
                                   ]);
                                   return back();
             }
             else{
                $manager = new ImageManager(new Driver());
                $img_extension = $request->file('cat_image')->getClientOriginalExtension();
                $new_name = date('YmdHis')."_".Auth::id().".".$img_extension;
                $img = $manager->read($request->file('cat_image'));
                if ($img_extension == "png") {
                    $img->toPng(80)->save(base_path('public/uploads/category_image/'.$new_name));
                } else {
                    $img->toJpeg(80)->save(base_path('public/uploads/category_image/'.$new_name));
                }

                Category::find($request->category_id)->update([
                'category_name'=>$request->category_name,
                'cat_image'=>$new_name,
                ]);
                return back();



             }


                             }

}

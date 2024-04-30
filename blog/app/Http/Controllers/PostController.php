<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Post;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;


class PostController extends Controller
{
    function add_Post(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.add_Post',[
            'categories'=>$categories,
            'tags'=>$tags,

        ]);
    }
 function post_store(Request $request){
    // $tag = $request->tag;
    $clean_title = preg_replace('/[^A-Za-z0-9\- ]/', '', $request->title);
    $slug = str_replace(' ', '_', str::lower(substr($clean_title, 1, 30)));
    $post = Post::create($request->except('_token')+[
       'author_id'=>Auth::id(),
       'category_id'=>$request->category_id,
       'title'=>$request->title,
       'tag_id'=>implode(',',$request->tag),
       'feat_image'=>$request->feat_image,
       'desp'=>$request->desp,
       'slug'=>$slug,
      'created_at'=>now(),


   ]);



   $manager = new ImageManager(new Driver());
   $img_extension = $request->file('feat_image')->getClientOriginalExtension();
   $new_name = date('YmdHis')."_".Auth::id().".".$img_extension;
   $img = $manager->read($request->file('feat_image'));
   // ->resize(370,250)
   if ($img_extension == "png") {
       $img->toPng(80)->save(base_path('public/uploads/post_image/'.$new_name));
   } else {
       $img->toJpeg(80)->save(base_path('public/uploads/post_image/'.$new_name));
   }
      Post::find($post->id)->update([
       'feat_image'=>$new_name,
   ]);
   return back();

 }

  function my_post(){
    $mypost = Post::Where('author_id', Auth::id())->get();
    return view('admin.post.view_post',[
        'mypost'=>$mypost,
    ]);

  }


}

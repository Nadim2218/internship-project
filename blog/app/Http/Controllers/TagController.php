<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagController extends Controller
{
    function tag(){
        $tags =Tag::all();
        return view('admin.tag.tag',[
            'tags'=>$tags,
        ]);
    }
    function tag_store(Request $request){
$request->validate([
'tag_name'=>'required',
'tag_name'=>'unique:tags',

]);


        Tag::insert([
            'tag_name'=>$request->tag_name,
            'created_at'=>now(),
        ]);
        return back()->with('tagdone', 'Tag Inserted Successfully');
    }



    function tag_delete($tag_id){
        Tag::find($tag_id)->delete();
        return back()->with('tagdelete', 'tag deleted successfully');
         }

}

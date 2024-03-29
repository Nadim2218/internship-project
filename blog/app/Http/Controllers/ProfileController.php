<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function profile()
    {
        return view('layouts.dashboard.profile.profile');
    }
     function profile_photo_upload(Request $request)
    {
        if ($request->hasFile('profile_photo')) {
            @unlink(public_path('public/uploads/profile_photos/'.Auth::user()->profile_photo));
            $manager = new ImageManager(new Driver());
            $img_extension = $request->file('profile_photo')->getClientOriginalExtension();
            $new_name = Auth::id().".".$img_extension;
            $img = $manager->read($request->file('profile_photo'));
            // ->resize(370,250)
            if ($img_extension == "png") {
                $img->toPng(80)->save(base_path('public/uploads/profile_photos/'.$new_name));
            } else {
                $img->toJpeg(80)->save(base_path('public/uploads/profile_photos/'.$new_name));
            }
            User::find(Auth::id())->update([
                'profile_photo'=>$new_name,
            ]);
            return back()->with('photosuccess', 'Profile Photo Updated Successfully');
        } else {
            return back()->with( 'photoerr', 'Profile Photo Is Required');
        }
    }

// password

    public function password_change(Request $request)
    {
          $request->validate([
          'old_password' =>'required',
          'password' => 'required|confirmed',
          'password_confirmation' => 'required',
          ]);



          if (Hash::check($request->old_password, auth()->user()->password)) {
        user::find(auth()->user()->id)->update([
            'password' => bcrypt($request->password),

        ]);
        return back()->with('passwordsuccess', 'password changed successfully');
          }
          else{
           return back()->withErrors('old password does not match');
        }
    }


    // name

    public function name_change(Request $request)
    {
          $request->validate([

          'new_name' => 'required',
          ]);



        user::find(auth()->user()->id)->update([
            'name' => ($request->new_name),

        ]);
        return back()->with('namesuccess', 'Name changed successfully');


    }


    // email
    public function email_change(Request $request)
    {
          $request->validate([

          'new_email' => 'required',
          ]);



        user::find(auth()->user()->id)->update([
            'email' => ($request->new_email),

        ]);
        return back()->with('emailsuccess', 'Email changed successfully');


    }

}

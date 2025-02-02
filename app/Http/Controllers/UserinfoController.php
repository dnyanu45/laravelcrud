<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; // Make sure to import the Hash facade
use Illuminate\Http\Request;
use App\Models\Userinfo;
use Illuminate\support\facades\validator;
use Illuminate\Support\Facades\Auth;
class UserinfoController extends Controller
{
    // public function userinfo(Request $request){
    //     $rules=[
    //         'name' => 'required|max:30',
    //         'email' => 'required|max:50',
    //         'password' => 'required|max:50',
    //         // 'confirmPassword' => 'required|max:10',
    //     ];

    //     // if ($request->password != $request->confirmPassword) {
    //     //     return redirect()->route('products.signup')->withErrors(['password' => 'Passwords do not match.']);
    //     // }
        


    //     $validator = validator::make($request->all(),$rules);

    //     if($validator->fails()){
    //         return redirect()->route('products.signup')->withInput()->withErrors($validator);
    //     }

    //     //insert userinfo into table.
    //     $userinfo = new userinfo();
    //     $userinfo->name = $request->name;
    //     $userinfo->email = $request->email;
    //     $userinfo->password = Hash::make($request->password); // Hash the password
    //     // $userinfo->confirmPassword = $request->confirmPassword;
    //     $userinfo->save();

    //     return redirect()->route('products.login')->with('success', 'product add successfully');
    // }

    // public function login(Request $request)
    // {
    //     // Validate the form data
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     // If validation fails, return with errors
    //     if ($validator->fails()) {
    //         return redirect()->route('products.login')->withErrors($validator)->withInput();
    //     }

    //     // Attempt to log the user in
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
    //         // Redirect to the intended page or homepage after login
    //         return redirect()->intended('products.dashboard');
    //     }

    //     // If login fails, redirect back with error message
    //     return redirect()->route('products.login')->with('error', 'Invalid login credentials');
    // }
}

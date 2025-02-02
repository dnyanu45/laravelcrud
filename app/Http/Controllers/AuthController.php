<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\support\facades\validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Logout method
    // public function logout(Request $request)
    // {
    //     // Logout the user
    //     Auth::logout();
        
    //     // Invalidate the session
    //     $request->session()->invalidate();
        
    //     // Regenerate the session token
    //     $request->session()->regenerateToken();
        
    //     // Redirect to home or login page after logout
    //     return redirect()->route('products.login');
    // }


    // public function create(){
    //     return view('products.create');
    // }

    //This method will store products in db
    public function Customerstore(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'age' => 'required|numeric',
            'gender' => 'required|string|in:Male,Female,Other', // Validate product_type
            'password' => 'required|min:6',
        ];



        $validator = validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.signup')->withInput()->withErrors($validator);
        }

         // Check if the email already exists
    if (users::where('email', $request->email)->exists()) {
        return redirect()->route('products.signup')->with('error', 'Email is already taken!');
    }

        //here we will insert product in db
        $customer = new users();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->age = $request->age;  // Store the product type
        $customer->gender = $request->gender;
        $customer->password = bcrypt($request->password);
        $customer->save();
        
        return redirect()->route('dashboard')->with('signup', 'product add successfully');
    }

    public function showLoginForm(){
        return view('products.login');
    }

    public function login(Request $request){
        //validte rules
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return view('products.login')->withErrors($validator)->with('error', 'Invalid credentials');
        }

        //attempt to login
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('dashboard');
        }
        else{
            return back()->with('error', 'Invalid credentials');
        } 
    }


    public function logout()
    {
        Auth::logout();
        return view('products.login');
    }

    // public function userLogin(){
    //     $userlogin = auth()->user();
    //     return view('products.dashboard',compact('userlogin'));
    // }

    public function adminlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
// Attempt to log the user in
if (Auth::guard('admin')->attempt([
    'email' => $request->email,
    'password' => $request->password
], $request->remember)) {
    return redirect()->route('admin.adminlogin'); // Redirect to admin dashboard or home
}

// If authentication fails
return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
}

// Logout the user
public function adminlogout()
{
    Auth::guard('admin')->logout();
    return redirect()->route('admin.adminlogin');
}


    }
    



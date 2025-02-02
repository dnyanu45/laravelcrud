<?php

namespace App\Http\Controllers;


use App\Models\Product;
use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\support\facades\validator;
use App\Models\User;

class ProductController extends Controller
{
    //This method will show products page
    public function index(){
        $products = Product::orderBy('created_at','DESC')->get();
        return view('products.list',[
            'products' => $products
        ]);
    }

    //This method will show create products page
    public function create(){
        return view('products.create');
    }

    //This method will store products in db
    public function store(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
            'product_type' => 'required|string|in:Phone,Tablet,laptop,Headphones & sound', // Validate product_type
        ];

        if($request->image != ""){
            $rules['image'] = 'image';
        }

        $validator = validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        //here we will insert product in db
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->product_type = $request->product_type;  // Store the product type
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if($request->image != ""){
            
            //here we will store image
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext; //unique image name

        //save image to products directroy
        $image->move(public_path('upload/products'), $imageName);

        //save image name in database
        $product->image = $imageName;
        $product->save();
        }

        

        return redirect()->route('products.index')->with('success', 'product add successfully');
    }

    //This method will show edit products page
    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit', [
            'product' => $product
        ]);
    }

    //This method will update products 
    public function update($id, Request $request){
        $product = Product::findOrFail($id);
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
            'product_type' => 'required|string|in:Phone,Tablet,laptop,Headphones & sound', // Validate product_type

        ];

        if($request->image != ""){
            $rules['image'] = 'image';
        }

        $validator = validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.edit',$product->id)->withInput()->withErrors($validator);
        }

        //here we will update product in db
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->product_type = $request->product_type;  // Store the product type
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if($request->image != ""){
            //delete old image
            File::delete(public_path('upload/products/' . $product->image));
            
            //here we will store image
        $image = $request->image;
        $exe = $image->getClientOriginalExtension();
        $imageName = time().'.'.$exe; //unique image name

        //save image to products directroy
        $image->move(public_path('upload/products'), $imageName);

        //save image name in database
        $product->image = $imageName;
        $product->save();
        }

        

        return redirect()->route('products.index')->with('success', 'product add successfully');
    }

    //This method will delete products
    public function destroy($id){
        $product = Product::findOrFail($id);

        //delete images
        File::delete('upload/products/' . $product->image);

        //delete product from database
        $product->delete();

        return redirect()->route('products.index')->with('success', 'product deleted successfully');
    }

    public function phone(){
        return view('products.dashboard');
    }


    public function login(){
        return view('products.login');
    }

    public function signup(){
        return view('products.signup');
    }

    public function showDashboard(Request $request){

        $userlogin = auth()->user();

        // public function showPhones(){
            $phone = DB::table('products')
                         ->where('product_type','phone')
                         ->simplePaginate(4);
    
        //                  return view('products.dashboard',compact('phone'));
        // }
    
        // public function showTabes(){
            $tablet = DB::table('products')
                         ->where('product_type','tablet')
                         ->simplePaginate(4);

    
        //                  return view('products.dashboard',compact('tablet'));
        // }

        $laptop = DB::table('products')
                         ->where('product_type','laptop')
                         ->simplePaginate(4);

        $Headphones_sound = DB::table('products')
                         ->where('product_type','Headphones & sound')
                         ->simplePaginate(4);

                            return view('products.dashboard', compact('phone', 'tablet','laptop','Headphones_sound', 'userlogin'));
    }

    }




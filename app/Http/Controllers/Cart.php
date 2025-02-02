<?php

namespace App\Http\Controllers;
use App\Models\cardpayment;
use App\Models\orders;
use App\Models\Order;
use Illuminate\support\facades\validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Session;



class Cart extends Controller
{

    // public function __construct()
    // {
    //     // Ensure the user is authenticated before viewing orders
    //     $this->middleware('auth');
    // }
    
    // Show Cart Page
    public function viewCart(Request $request)
    {
        // Get the cart from session
        $cart = Session::get('cart', []);

        $totalAmount = 0;

        foreach($cart as $product){
            $totalAmount += $product['price'] * $product['quantity'];
        }

        $request->session()->put('totalAmount', 'totalAmount');

        // Pass cart to view
        return view('cart.index', compact('cart','totalAmount'));

        


    }

    // Add item to the cart
    public function addToCart(Request $request)
    {
        // Get product details from the request
        $product = $request->only(['id', 'name', 'price', 'image']);
        $product['quantity'] = 1; // Default quantity is 1

        // Get the current cart from session
        $cart = Session::get('cart', []);
        
        // If product already in cart, increase quantity
        if (isset($cart[$product['id']])) {
            $cart[$product['id']]['quantity']++;
        } else {
            // Add the new product to the cart
            $cart[$product['id']] = $product;
        }

        // Save the cart back to the session
        Session::put('cart', $cart);

        // Redirect back to cart view
        return redirect()->route('cart.view');
    }

    // Update product quantity in the cart
    public function updateQuantity(Request $request, $id)
    {
        // Get the cart from session
        $cart = Session::get('cart', []);

        // Update the quantity of the product
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            Session::put('cart', $cart);
        }

        // Redirect back to cart view
        return redirect()->route('cart.view');
    }

    // Remove product from the cart
    public function removeFromCart($id)
    {
        // Get the cart from session
        $cart = Session::get('cart', []);

        // Remove the product from the cart
        unset($cart[$id]);

        // Save the updated cart to session
        Session::put('cart', $cart);

        // Redirect back to cart view
        return redirect()->route('cart.view');
    }


    // for card payment

    public function storePayment(Request $request)
    {
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            return redirect()->route('products.dashboard')->with('error', 'Your cart is empty. Please add items to the cart before proceeding.');
        }else{
        $rules = [
            'cardholder_name' => 'required|string|max:255',
            'card_number' => 'required|numeric|digits:16',
            'expiry_date' => 'required|string|max:5', // e.g., "12/89"
            'cvv' => 'required|numeric|digits:3',
            'total_amount' => 'required|numeric|min:1',
        ];
    
        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // If validation passes, process the payment
        $payment = new cardpayment();
        $payment->cardholder_name = $request->cardholder_name;
        $payment->card_number = $request->card_number;
        $payment->expiry_date = $request->expiry_date;
        $payment->cvv = $request->cvv;
        $payment->total_amount = $request->total_amount;
        $payment->save();

        // Step 2: Create an order number
        $orderNumber = 'ORD' . Str::padLeft(rand(1, 99999), 5, '0');

        // Step 3: Store the order details
        $order = new Order();
        $order->order_number = $orderNumber;
        $order->customer_name = $request->cardholder_name; // Use cardholder name as customer name
        // $order->total_price = $totalAmount; // Store the total price
        $order->cart_items = json_encode($cart); // Store the cart items as JSON
        $order->save(); // Save order details

        Session::forget('cart'); 

    
        return redirect()->route('cart.confirmation')->with('success', 'Payment has been successfully processed.');
        }
    }

    

     // Order Confirmation Page
     public function orderConfirmation(Request $request)
     {

        
        $order = orders::orderBy('created_at','DESC')->get();

         return view('cart.confirmation', [
            'products' => $order
        ]);
     }

     public function showOrder(){
        $useroder = Auth::user();
        $orders = $useroder->orders ?: [];

        return view('cart.userorders', compact('orders'));
     }

    //  public function amount(Request $request){
    //     $cart = Session::get('cart', []);
    //     $totalAmount = 0;
    //     foreach ($cart as $product) {
    //         $totalAmount += $product['price'] * $product['quantity'];
    //     }
    //     // $rules = [
    //     //     't_amount' => 'required', 
    //     // ];
        
    //     $total_amount = new amount();
    //     $total_amount->totalAmount = $request->t_amount;
    //     return compact('totalAmount');
    //  }

}




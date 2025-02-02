<?php
namespace App\Http\View\Composers;


use App\Models\cardpayment;
use App\Models\Order;
use App\Models\amount;
use Illuminate\View\View;
use Request;
use Session;

class CartComposer
{
    public function compose(View $view)
    {
        // Retrieve cart data from session
        $cart = Session::get('cart', []);
        $userlogin = auth()->user();
        // Calculate total amount
        $totalAmount = 0;
        foreach ($cart as $product) {
            $totalAmount += $product['price'] * $product['quantity'];
        }

       
// $mail = $request->table('email');





        // Share data with all views
        $view->with('cart', $cart)->with('totalAmount', $totalAmount)->with(compact('userlogin','totalAmount'));
    }

    public function username(View $view ,Request $request)
    {
        $cart = Session::get('cart', []);
         $mail = $request->table('email');
        
         $view->with('cart', $cart)->with('mail', $mail);
         $userlogin = auth()->user();

         $total_amount = cardpayment::all();
         return compact('userlogin','total_amount');

    }

    public function amount(Request $request){
        $cart = Session::get('cart', []);
        $totalAmount = 0;
        foreach ($cart as $product) {
            $totalAmount += $product['price'] * $product['quantity'];
        }
        // $rules = [
        //     't_amount' => 'required', 
        // ];
        
        $total_amount = new amount();
        $total_amount->totalAmount = $request->t_amount;
        return compact('totalAmount');
     }
}

<?php
use App\Http\Controllers\Cart;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view(view: 'products.about');
})->name('about');

Route::get('/help', function () {
    return view(view: 'products.help');
})->name('help');

// Route::get('/dashboard', [ProductController::class,'dashboard'])->name('products.dashboard');
// Route::get('/login', [ProductController::class,'login'])->name('products.login');
Route::get('/signup', [ProductController::class,'signup'])->name('products.signup');
Route::get('/create', [ProductController::class,'create'])->name('products.create');
Route::Post('/products', [ProductController::class,'store'])->name('products.store');
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/{product}/edit', [ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class,'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('products.destroy');
Route::get('/dashboard', [ProductController::class,'showDashboard'])->name('products.dashboard');





Route::prefix('cart')->group(function() {
    // Add product to cart
    Route::post('/add', [Cart::class, 'addToCart'])->name('cart.add');
    
    // Update product quantity
    Route::post('/update/{id}', [Cart::class, 'updateQuantity'])->name('cart.update');
    
    // Remove product from cart
    Route::get('/remove/{id}', [Cart::class, 'removeFromCart'])->name('cart.remove');
    
    // View cart
    Route::get('/', [Cart::class, 'viewCart'])->name('cart.view');
});






// side bar rout dashboard
Route::get('/profile', function () {
    return view(view: 'products.profile');
})->name('profile');


Route::get('/cartView', function () {
    return view(view: 'cart.index');
})->name('cartView');

Route::get('/paymentmode', function () {
    return view(view: 'cart.paymentmode');
})->name('paymentmode');

Route::middleware(['auth'])->get('/card',function () {
    return view(view: 'cart.cardpayment');
})->name('card');
// Route::middleware(['auth'])->get('/card',[])->name('card');


// Route::post('/cardpayment', [Cart::class, 'storePayment'])->name('cart.cardpayment');

// Protect the route with the 'auth' middleware
Route::middleware(['auth'])->post('/cardpayment', [Cart::class, 'storePayment'])->name('cart.cardpayment');

Route::get('/order/confirmation', [Cart::class, 'orderConfirmation'])->name('cart.confirmation');

// Add the logout route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('Customerstore', [AuthController::class, 'Customerstore'])->name('products.Customerstore');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
// for login
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [ProductController::class,'showDashboard'])->name('dashboard');
});

// Route::middleware(['auth'])->get('/dashboard', [AuthController::class, 'userLogin'])->name('dashboard');



//for go to user profile

Route::get('/userprofile',function(){
    return view('cart.userprofile');
})->name('userprofile');

Route::get('showorder', [Cart::class, 'showOrder'])->name('showorder');

Route::post('adminlogin', [AuthController::class, 'adminlogin'])->name('adminlogin');

Route::get('/admin', function(){
    return view('admin.adminlogin');
})->name('admin');
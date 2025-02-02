<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https:\\cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    

</head>
<body>
    <nav class="navbar">
        <div class="logo">MySite</div>
        <button class="menu-toggle" id="menuToggle">
            &#9776; <!-- Hamburger menu icon -->
        </button>
        <ul class="nav-links" id="navLinks">
            <li>
                <a href="#home">
                    <span class="icon">🏠</span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <span class="icon">ℹ️</span>
                    <span class="text">About</span>
                </a>
            </li>
            <li>
                <a href="{{route('cart.confirmation')}}">
                    <span class="icon">👨‍💻</span>
                    <span class="text">View Orders</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('logout') }}">
                    <span class="icon">📞</span>
                    <span class="text">Logout</span>
                </a>
            </li>
            <a href="{{ route('userprofile') }}">
            <div  class="mr-2 p-2 bg-primary">
                <h4><center>👩‍🦳<br></center> {{ $userlogin->name }}</h4>
                
            </div></a>
        </ul>
        
        
    </nav>

    <div class="cover-image">
        <img width="100%" src="images\image.png">
        <div class="cover-text">
            Welcome to D S Shop
        </div>
    </div>
<!-- Category Tabs -->
    <div class="product-categoy">
        <a href="{{ route('cart.view') }}" class="cart-btn button btn " >Cart</a>
        <div class="col-md-15 mt-5 p-2  d-flex justify-content-center align-items-center">
            <a class="btn btn-primary" href="#phone" class="btn btn-dark ">Phones</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="#tab" class="btn btn-dark ">Tabes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="#laptop" class="btn btn-dark ">Laptops</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="#headphone" class="btn btn-dark ">Headphones & sound</a>
           
        </div>
    </div>
    
    <div class="product-all" style="margin-top: 5rem; font-family:Georgia, 'Times New Roman', Times, serif; padding: 50px ">
        
{{-- <div class="btn-group" role="group" aria-label="Category Tabs">
    <a href="{{ route('products.dashboard', ['category' => 'phone']) }}" class="btn btn-dark {{ $category == 'phone' ? 'active' : '' }}">Phones</a>
    <a href="{{ route('products.dashboard', ['category' => 'tablet']) }}" class="btn btn-dark {{ $category == 'tablet' ? 'active' : '' }}">Tablets</a>
    <a href="{{ route('products.dashboard', ['category' => 'laptop']) }}" class="btn btn-dark {{ $category == 'laptop' ? 'active' : '' }}">Laptops</a>
    <a href="{{ route('products.dashboard', ['category' => 'Headphones & sound']) }}" class="btn btn-dark {{ $category == 'Headphones & sound' ? 'active' : '' }}">Headphones & Sound</a>
</div> --}}

<!-- Product Display Based on Category -->
<div><h2>Phones</h2>
<div id="phone" class="row row-cols-1 row-cols-md-4 g-4">
    
    @foreach ($phone as $product)
        <div class="col">
            <div class="card shadow-sm border-light rounded">
                <img class="card-img card-img-top" src="{{ asset('upload/products/' . $product->image) }}" alt="Product Image">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p><strong>Sku:</strong> {{ $product->sku }}</p>
            <p><strong>Type:</strong> {{ $product->product_type }}</p>
            <p><strong>Price:</strong> Rs {{ number_format($product->price, 2) }}</p>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="hidden" name="image" value="{{ $product->image }}">
                <button type="submit" class="btn btn-dark btn-sm">Add to Cart</button>
            </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        {{ $phone->links() }} <!-- Pagination  -->
        </div><br><hr><br>

       <!-- Product Display Based on Category -->
       <div><h2>Tablet</h2></div>
<div id="tab" class=" row row-cols-1 row-cols-md-4 g-4">
    @foreach ($tablet as $product)
        <div class="col">
            <div class="card shadow-sm border-light rounded">
                <img class="card-img card-img-top" src="{{ asset('upload/products/' . $product->image) }}" alt="Product Image">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p><strong>Sku:</strong> {{ $product->sku }}</p>
                    <p><strong>Type:</strong> {{ $product->product_type }}</p>
                    <p><strong>Price:</strong> Rs {{ number_format($product->price, 2) }}</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                        <button type="submit" class="btn btn-dark btn-sm">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        {{ $tablet->links() }} <!-- Pagination  -->
        </div><br><hr><br>

        <!-- Product Display Based on Category -->
        <div><h2>Laptop</h2></div>
<div id="laptop" class="row row-cols-1 row-cols-md-4 g-4">
    @foreach ($laptop as $product)
        <div class="col">
            <div class="card shadow-sm border-light rounded">
                <img class="card-img card-img-top" src="{{ asset('upload/products/' . $product->image) }}" alt="Product Image">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p><strong>Sku:</strong> {{ $product->sku }}</p>
            <p><strong>Type:</strong> {{ $product->product_type }}</p>
            <p><strong>Price:</strong> Rs {{ number_format($product->price, 2) }}</p>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="hidden" name="image" value="{{ $product->image }}">
                <button type="submit" class="btn btn-dark btn-sm">Add to Cart</button>
            </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        {{ $laptop->links() }} <!-- Pagination  -->
        </div><br><hr><br>



    <!-- Product Display Based on Category -->
    <div><h2>Headphones & sound</h2></div>
<div id="headphone" class="row row-cols-1 row-cols-md-4 g-4">
    @foreach ($Headphones_sound as $product)
        <div class="col">
            <div class="card shadow-sm border-light rounded">
                <img class="card-img card-img-top" src="{{ asset('upload/products/' . $product->image) }}" alt="Product Image">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p><strong>Sku:</strong> {{ $product->sku }}</p>
            <p><strong>Type:</strong> {{ $product->product_type }}</p>
            <p><strong>Price:</strong> Rs {{ number_format($product->price, 2) }}</p>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="hidden" name="image" value="{{ $product->image }}">
                <button type="submit" class="btn btn-dark btn-sm">Add to Cart</button>
            </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        {{ $Headphones_sound->links() }} <!-- Pagination  -->
        </div><br><hr><br>

    </div>



    <div id="Scrolltop" class=" btn btn-primary p-2"><href="#"><i class='fas fa-arrow-up'></i>Scroll Top</a></div>
</body>
</html>


















    <script >// Get the menu toggle button and nav links
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        
        // Add a click event to toggle the menu
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('show'); // Add or remove the "show" class
        });</script>

<script>
{{-- for scroll top --}}

window.onscroll = function() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("Scrolltop").style.display = "block";
  } else {
    document.getElementById("Scrolltop").style.display = "none";
  }
};

// Scroll to the top when the button is clicked
document.getElementById("Scrolltop").onclick = function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>
</body>
</html>
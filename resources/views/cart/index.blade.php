<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <a href="{{ route('dashboard') }}" class="button btn border-info btn-dark"> dashboard</a>&nbsp; &nbsp;
    <h2>Your Cart</h2>
    <div  class="mr-2 p-2 bg-primary" style="width: 100px;float:right;">
        <h4><center>👩‍🦳<br> {{ $userlogin->name }}</h4></center>
        
    </div>

    @if(!empty($cart))
        <table class="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $product)
                    <tr>
                        <td>
                            <h4>{{ $id }}</h4>
                        </td>
                        <td>
                            <img src="{{ asset('upload/products/' . $product['image']) }}" alt="Product Image" width="50">
                            {{ $product['name'] }}
                        </td>
                        <td>Rs {{ number_format($product['price'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.update', $id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $product['quantity'] }}" min="1" class="form-control w-25">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
                            </form>
                        </td>
                        <td>Rs {{$total_Price =  number_format($product['price'] * $product['quantity'], 2) }}</td>
                        <td>
                            <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>

                    {{-- <h1>{{$total_Price}}</h1> --}}
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between mt-4">
            <h3>Total: Rs {{ number_format(array_sum(array_map(function($product) {
                return $product['price'] * $product['quantity'];
            }, $cart)), 2) }}</h3>
            <a href="{{ route('paymentmode') }}" class="btn btn-success btn-lg">Proceed to Checkout</a>
        </div>

    @else
        <p>Your cart is empty.</p>

    
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

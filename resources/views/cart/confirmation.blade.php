<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyGZ7q7SxGv7Qd8z9M6lVoCnkBIVY4VvvvQ2sZg1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS for animation */
        .fade-in {
            animation: fadeInAnimation 1s ease-out forwards;
        }

        @keyframes fadeInAnimation {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class=" container mt-5">
        <h2>Order Details</h2>
        <div class="alert alert-info">
            {{session('success')}}
        </div>
        <div class="d-flex justify-content-center align-items-center card-order   d-flex">
            <div class="row d-flex justify-content-center align-items-center  ">

            
        <!-- Loop through the products or orders -->
        @foreach ($products as $cardpayment)
        <div class=" card-body  card col-md-12 mt-3 ml-3" style="height: 300px; width: auto;">
            <h5 class="card-title">Order ID: {{ $cardpayment->id }}</h5>
            <p><strong>Order Number:</strong> {{ $cardpayment->order_number }}</p>
            <p><strong>Items:</strong> {{ $cardpayment->cart_items }}</p>
            <p><strong>Customer Name:</strong> {{ $cardpayment->customer_name }}</p>
            {{-- <p><strong>Customer Name:</strong>  {{ $userlogin->name }} </p> --}}
            
        </div>
        @endforeach

        <!-- Display the total price -->
        {{-- <div class="row mt-3">
            <div class="col">
                <div class="alert alert-info">
                    <h4>Total Price: Rs {{ number_format($totalAmount, 2) }}</h4>
                </div>
            </div>
        </div> --}}
    </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




{{-- <div class="card-body">
    <h5 class="card-title">Order ID: {{ $cardpayment->id }}</h5>
    <p><strong>Order Number:</strong> {{ $cardpayment->order_number }}</p>
    <p><strong>Items:</strong> {{ $cardpayment->cart_items }}</p>
    <p><strong>Customer Name:</strong> {{ $cardpayment->customer_name }}</p>
</div> --}}
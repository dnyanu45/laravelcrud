<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div  class="mr-2 p-2 bg-primary" style="width: 100px;float:right;">
        <h4><center>👩‍🦳<br> {{ $userlogin->name }}</h4></center>
        
    </div>
    <h2>Payment Details</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <form action="{{ route('cart.cardpayment')  }}"  method="POST">
        @csrf
        <div class="form-group">
            <label for="cardholder-name">Cardholder Name</label>
            <input type="text" name="cardholder_name" id="card_number" class="form-control" placeholder="Enter Card Holder Name" value="{{ old('cardholder_name') }}" required>
            @error('cardholder_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="card_number">Card Number</label>
            <input type="text" name="card_number" id="card_number" class="form-control" placeholder="1234 5678 9012 3456" value="{{ old('card_number') }}" required>
            @error('card_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="expiry_date">Expiry Date (MM/YY)</label>
            <input type="text" name="expiry_date" id="expiry_date" class="form-control" placeholder="MM/YY" value="{{ old('expiry_date') }}" required>
            @error('expiry_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" name="cvv" id="cvv" class="form-control" placeholder="123" value="{{ old('cvv') }}" required>
            @error('cvv')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="total_amount">Total Amount</label>
           
            <input type="text" value="{{ number_format($totalAmount) }}"  name="total_amount" id="total_amount" class="form-control" placeholder="" value="{{ old('total_amount') }}" required>
            @error('total_amount')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
</div>

</body>
</html>

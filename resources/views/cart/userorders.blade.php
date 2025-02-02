<!-- resources/views/orders/index.blade.php -->




<div class="container">
    <h1>Your Orders</h1>
    {{-- $orders = optional($user->orders)->isEmpty();
    @if($orders)
        <p>You don't have any orders yet.</p>
    @else --}}
        <table class="table">
            <thead>
                <tr>
                    <th>Order Number: {{ $userlogin->email }}</th>
                    <th>Total Price:             <input type="text" value="{{ number_format($totalAmount) }}"  name="total_amount" id="total_amount" class="form-control" placeholder="" value="{{ old('total_amount') }}" required>
                    </th>
                    {{-- <th>Items{{$orders->id}}</th> --}}
                    {{-- <th>Items{{$orders->order_number}}</th>
                    <th>Items{{$orders->customer_name}}</th>
                    <th>Items{{$orders->cart_items}}</th>
                    <th>Items{{$orders->created_at}}</th>
                    <th>Items{{$orders->updated_at}}</th> --}}
                    {{-- <th>Items{{$orders->user_id}}</th> --}}
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
           
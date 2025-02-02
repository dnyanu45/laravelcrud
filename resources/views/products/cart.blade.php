<!-- Inside Product Listing -->
{{-- <div class="col">
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
</div> --}}

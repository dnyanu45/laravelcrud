<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 crud</title>
    <link href="https:\\cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .button:hover{background-color: rgb(2, 109, 224);}
    </style>
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container">
      <div class="row   p-3 align-center mt-4" >
        <div class="col-md-15 p-2 d-flex w-100 justify-content-end" >
          <a href="{{ route('products.create') }}" class="button  btn  border-info btn-dark" > Home</a>&nbsp; &nbsp;
          <a href="{{ route('products.create') }}" class="button btn border-info btn-dark mr-2"> Create</a>&nbsp; &nbsp;
          <a href="{{ route('dashboard') }}" class="button btn border-info btn-dark"> dashboard</a>&nbsp; &nbsp;
          <a href="{{ route('login') }}" class="button btn border-info btn-dark"> Logout</a>
        </div>
      </div>
        <div class="row d-flex justify-content-center">
            @if(Session::has('success'))
            <div class="col-md-10">
              <div class="alert alert-success">
                    {{ Session::get('success') }}
              </div>
            </div>
            @endif
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark text-white">
                        <h3>Products</h3>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Sku</th>
                          <th>Product Type</th>
                          <th>Price</th>
                          <th>Created at</th>
                          <th>Action</th>
                        </tr>
                        @if ($products->isNotEmpty())

                        @foreach($products as $product)
                        <tr>
                          <td>{{ $product->id }}</td>
                          <td>
                            @if ($product->image != "")
                            <img width="50" src="{{ asset('upload/products/' .$product->image) }}" alt="Product Image">
                            @endif
                        </td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->sku }}</td>
                          <td>{{ $product->product_type }}</td>
                          <td>₹{{ $product->price }}</td>
                          <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                          <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark">Edit</a>
                            <a href="#" onclick="deleteProduct({{ $product->id }})" class="btn btn-danger">Delete</a>
                            <form id="delete-product-from-{{ $product->id }}" action="{{ route('products.destroy', $product->id)}}" method="post">
                              @csrf
                              @method('delete')
                            </form>
                        
                          </td>
                        </tr>
                        @endforeach
                        @endif
                        
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

<script>
  function deleteProduct(id){
    if(confirm("Are you sure you want to delete this product?")){
      document.getElementById("delete-product-from-"+id).submit();
    }
  }
</script>
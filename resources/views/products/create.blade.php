<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 crud</title>
    <link href="https:\\cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
              <a href="{{ route('products.index') }}" class="btn btn-dark"> Edit</a>
            </div>
          </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark text-white">
                        <h3>create product</h3>
                    </div>
                    {{-- enctype="multipart/form-data" used for handle images,audio,video type data --}}
                <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
                    @csrf
                        <div class="card-body ">
                            <div class="mb-3">
                                <label for="name" class="form-label h4">Name</label>
                                <input type="text" value="{{ old('name') }}" class="@error('name') is-invalid @enderror  form-control form-control-lg" placeholder="Name" name="name">
                                
                                @error('name')
                                <p class="invalid-feedback"> {{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="sku" class="form-label h4">sku</label>
                                <input type="text" value="{{ old('sku') }}" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="sku" name="sku">
                            
                                @error('sku')
                                <p class="invalid-feedback"> {{ $message }}</p>
                                @enderror
                            
                            </div>
                                <div class="mb-3">
                                                            <!-- Product Type -->
                                <label for="product_type" class="form-label h4">Product Type</label>
                                <select name="product_type" class="form-control form-control-lg @error('product_type') is-invalid @enderror">
                                    <option value="" disabled {{ old('product_type') ? '' : 'selected' }}>Select Product Type</option>
                                    <option value="Phone" {{ old('product_type') == 'Phone' ? 'selected' : '' }}>Phone</option>
                                    <option value="Tablet" {{ old('product_type') == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                                    <option value="laptop" {{ old('Prproduct_typeoductType') == 'laptop' ? 'selected' : '' }}>Laptop</option>
                                    <option value="Headphones & sound" {{ old('ProductType') == 'Headphones & sound' ? 'selected' : '' }}>Headphones & sound</option>
                                </select>

                                @error('product_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                            </div> 

                            <div class="mb-3">
                                <label for="price" class="form-label h4">Price</label>
                                <input type="text" value="{{ old('price') }}" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price" name="price">
                            
                                @error('price')
                                <p class="invalid-feedback"> {{ $message }}</p>
                                @enderror
                            
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label h4">Description</label>
                                <textarea value="{{ old('description') }}"  cols="30" rows="5" class="form-control" placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h4">Image</label>
                                <input  type="file" class="form-control form-control-lg" placeholder="image" name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
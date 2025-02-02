<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to right, #fde0d2, #cc97e3);
      height: 100vh;
      /* display: flex;
      justify-content: center;
      align-items: center; */
    }

    .menu{

        margin-right: 3%;
        /* justify-content: end; */
    }

    .card {
      border-radius: 10px;
    }
    .card-header {
      text-align: center;
      font-size: 1.5rem;
      background-color: #f8f9fa;
    }
    .form-control {
      border-radius: 20px;
    }
    .btn-custom {
      border-radius: 20px;
      background-color: #2575fc;
      color: white;
      font-size: 1rem;
    }
    .btn-custom:hover {
      background-color: #6a11cb;
    }
    .terms-checkbox {
      font-size: 0.9rem;
    }
    .signup-link {
      text-align: center;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
    <a href="/" class="button fs-2 btn text-dark fw-bold" >My Shop</a>&nbsp; &nbsp;
<div class="menu row align-center mb-3 mt-0" >
        <div class="col-md-15 p-2 d-flex w-100 ml-2 justify-content-end" >
          <a href="{{ route('products.create') }}" class="button  btn  border-info btn-dark" > Home</a>&nbsp; &nbsp;
          <a href="{{ route('about') }}" class="button btn border-info btn-dark mr-2"> About</a>&nbsp; &nbsp;
          <a href="{{ route('help') }}" class="button btn border-info btn-dark"> Help</a>&nbsp; &nbsp;
          <a href="{{ route('login') }}" class="button btn border-info btn-dark"> Log in</a>
        </div>
      </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card shadow-lg">
          <div class="card-header">
            <h3>Sign Up</h3>
          </div>
          <div class="card-body">
            <!-- Signup Form -->
            <form action="{{route('products.Customerstore')}}" method="post">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required />
              </div>
              <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="type a age" required />
              </div>
              <label for="age" class="form-label">Gender</label>
                                <select name="gender" class="form-control form-control @error('gender') is-invalid @enderror">
                                    <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select Gender Type</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                    {{-- <option value="Headphones & sound" {{ old('ProductType') == 'Headphones & sound' ? 'selected' : '' }}>Headphones & sound</option> --}}
                                </select>

                                @error('product_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                            

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Create a password" required />
              </div>
             


              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="terms" />
                <label class="form-check-label terms-checkbox" name="  for="terms">I agree to the <a href="#">terms and conditions</a></label>
              </div>
              <button type="submit" class="btn btn-custom w-100 mt-4">Sign Up</button>
            </form>
          </div> 
          </div>
          <div class="card-footer text-center">
            <p class="signup-link">Already have an account? <a href="#">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

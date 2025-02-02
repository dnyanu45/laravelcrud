<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      /* margin: 0 0; */
      background: linear-gradient(to right, #d0b9e9, #99fda8);
      height: 100vh;
      /* display: flex;
      justify-content: center;
      align-items: center; */
    }
    .menu{
        padding-top: 3%;
        margin-right: 3%;
        /* justify-content: end; */
    }
    .card {
        margin-top: 10%;
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
    .forgot-password {
      text-align: center;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
    <a href="/" class="button fs-2 btn text-dark fw-bold" >My Shop</a>&nbsp; &nbsp;
    <div class="menu row align-center mb-3 mt-0" >
        <div class="col-md-15 p-2 d-flex w-100 ml-2 justify-content-end" style="margin-top: -10px">
          <a href="{{ route('products.create') }}" class="button  btn  border-info btn-dark" > Home</a>&nbsp; &nbsp;
          <a href="{{ route('about') }}" class="button btn border-info btn-dark mr-2"> About</a>&nbsp; &nbsp;
          <a href="{{ route('help') }}" class="button btn border-info btn-dark"> Help</a>&nbsp; &nbsp;
          <a href="{{ route('products.signup') }}" class="button btn border-info btn-dark"> Sign up</a>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card shadow-lg">
              <div class="card-header">
                <h3>Login</h3>
                <div class="alert alert-danger">
                  {{session('error')}}
              </div>
              </div>
              <div class="card-body">
                <!-- Login Form -->
                <form action="{{route('login')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" required />
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password" required />
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe" />
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                  </div>
                  <button type="submit" class="btn btn-custom w-100 mt-4">Login</button>
                </form>
              </div>
              <div class="card-footer text-center">
                <p>Don't have an account? <a href="#">Sign up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Bootstrap JS (Optional) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>

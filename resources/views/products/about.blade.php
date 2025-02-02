<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Shopping Site</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .company-image {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }
    .team-member img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
    }
    .client-image {
      width: 120px;
      height: 120px;
      object-fit: contain;
    }
    .section-title {
      margin-top: 40px;
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ShopSmart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.login') }}">Login</a>
          </li><li class="nav-item">
            <a class="nav-link" href="{{ route('products.signup') }}">sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Company Image Section -->
  <div class="container-fluid p-0">
    <div class="text-center py-4">
        <h1>ShopSmart</h1>
      </div>
    <img src="images\c.jpg" alt="Company Image" class="company-image">
    
  </div>

  <!-- About Company Section -->
  <div id="about" class="container my-5">
    <h2 class="section-title">About Us</h2>
    <p class="text-center">We are ShopSmart, a leading online shopping platform where you can find a wide variety of products at great prices. Our mission is to make shopping easy, fun, and affordable for everyone!</p>
  </div>

  <!-- Clients Section -->
  <div id="clients" class="container my-5">
    <h2 class="section-title">Our Clients</h2>
    <div class="row justify-content-center">
      <!-- Client 1 -->
      <div class="col-6 col-md-3 text-center">
        <img src="https://via.placeholder.com/120?text=Client+Logo" alt="Client 1" class="client-image mb-2">
        <p>Client 1</p>
      </div>
      <!-- Client 2 -->
      <div class="col-6 col-md-3 text-center">
        <img src="https://via.placeholder.com/120?text=Client+Logo" alt="Client 2" class="client-image mb-2">
        <p>Client 2</p>
      </div>
      <!-- Client 3 -->
      <div class="col-6 col-md-3 text-center">
        <img src="https://via.placeholder.com/120?text=Client+Logo" alt="Client 3" class="client-image mb-2">
        <p>Client 3</p>
      </div>
      <!-- Client 4 -->
      <div class="col-6 col-md-3 text-center">
        <img src="https://via.placeholder.com/120?text=Client+Logo" alt="Client 4" class="client-image mb-2">
        <p>Client 4</p>
      </div>
    </div>
  </div>

  <!-- Founder Section -->
  <div id="founder" class="container my-5">
    <h2 class="section-title">Founder Information</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 text-center">
        <img src="images\ds.png" alt="Founder Image" class="team-member  mb-3 " style="border-radius:50%; width: 320px; height: 300px;">
        <h4>Dnyaneshwar shinde</h4>
        <p>Founder & CEO</p>
        <p>Jane founded ShopSmart in 2025 with the vision to create an easy-to-use platform that brings shopping convenience to people's fingertips. She believes in making online shopping simple, reliable, and fun!</p>
      </div>
    </div>
  </div>

  <!-- Team Section -->
  <div id="team" class="container my-5">
    <h2 class="section-title">Meet Our Team</h2>
    <div class="row justify-content-center">
      <!-- Team Member 1 -->
      <div class="col-md-3 text-center">
        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member 1" class="team-member mb-3">
        <h5>John Doe</h5>
        <p>Lead Developer</p>
      </div>
      <!-- Team Member 2 -->
      <div class="col-md-3 text-center">
        <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Team Member 2" class="team-member mb-3">
        <h5>Emily Taylor</h5>
        <p>Marketing Head</p>
      </div>
      <!-- Team Member 3 -->
      <div class="col-md-3 text-center">
        <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Team Member 3" class="team-member mb-3">
        <h5>Michael Clark</h5>
        <p>Operations Manager</p>
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <div id="services" class="container my-5">
    <h2 class="section-title">Our Services</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <h4>Fast Shipping</h4>
        <p>We offer fast and reliable shipping to ensure your products reach you in no time!</p>
      </div>
      <div class="col-md-4">
        <h4>24/7 Support</h4>
        <p>Our customer support team is always available to assist you with any queries.</p>
      </div>
      <div class="col-md-4">
        <h4>Quality Assurance</h4>
        <p>We ensure top-quality products that are handpicked for your shopping satisfaction.</p>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="bg-light py-4 mt-5">
    <div class="container text-center">
      <p>&copy; 2025 ShopSmart. All Rights Reserved. | <a href="#contact">Contact Us</a></p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

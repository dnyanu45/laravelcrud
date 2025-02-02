<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .help-section {
      margin-top: 30px;
    }
    .card-header {
      background-color: #f8f9fa;
    }
    .card-body {
      background-color: #f1f1f1;
    }
    .nav-link.active {
      color: #2575fc;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Help Center</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#intro">Introduction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Support</a>
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

  <!-- Help Page Content -->
  <div class="container help-section">
    
    <!-- Introduction Section -->
    <div id="intro" class="my-5">
      <h2>Welcome to the Help Center</h2>
      <p>We are here to assist you! Find answers to common questions, user guides, and support resources.</p>
    </div>

    <!-- FAQ Section -->
    <div id="faq" class="my-5">
      <h2>Frequently Asked Questions (FAQs)</h2>
      
      <!-- Collapsible FAQ Cards -->
      <div class="accordion" id="faqAccordion">
        
        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              How do I create an account?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              To create an account, click the "Sign Up" button on the homepage and fill out your details. After submitting, you'll receive a confirmation email.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How can I reset my password?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              If you've forgotten your password, click on the "Forgot Password" link on the login page. Enter your registered email address, and you'll receive a link to reset your password.
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How can I contact customer support?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              You can contact customer support through our "Contact Support" page. Alternatively, you can email us at support@domain.com.
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Contact Support Section -->
    <div id="contact" class="my-5">
      <h2>Contact Support</h2>
      <p>If you have any other questions or issues, don't hesitate to reach out to our support team.</p>
      
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Describe your issue or question" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

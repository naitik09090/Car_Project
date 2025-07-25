<!-- navbar.php -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Navbar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-black text-white">

  <?php include 'BottomToTop.php' ?>

  <?php include 'Navbar.php' ?>



  <section class="container py-5">
    <!-- Tagline -->
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 d-flex align-items-center justify-content-center p-2 gap-2 bg-glass mb-4 rounded-pill text-white-50 mt-5 p-2 text-sm w-auto">
        <p class="mb-0 text-center w-20">Explore luxurious Cars With All Brands.</p>
        <a href="#" class="d-flex align-items-center gap-1 text-white fw-medium text-decoration-none">
          Read more
          <svg width="19" height="19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.959 9.5h11.083m0 0L9.501 3.96m5.541 5.54-5.541 5.542" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
      <div class="col-md-4"></div>
    </div>
    <div class="row">
      <div class="col-md-12 justify-content-center text-center">
        <!-- Heading -->
        <h1 class="text-center fw-semibold display-5 btn-gradient">
          All luxurious Cars Models
        </h1>
      </div>
      <!-- Description -->
      <div class="row">
        <div class="col-md-12 justify-content-center text-center">
          <p class="text-center text-light line-clamp-3 mx-auto" style="max-width: 650px;">
            Precision meets prestige — where engineering becomes art.
            Designed to impress. Built to outperform. Driven by excellence.
            Not just a car. A statement of success and style.
          </p>
        </div>
      </div>
    </div>
    <!-- Buttons -->
    <div class="row justify-content-center mt-4 g-2">
      <div class="col-auto">
        <a href="All_Cars.php" class="btn btn-primary py-2 rounded-pill">Show All Model</a>
      </div>

    </div>

    <!-- Image Gallery -->
    <div class="mt-5 scroll-container d-flex gap-3 mb-5">
      <?php
      $images = [
        "img1.jpg",
        "audi.jpg",
        "img3.jpg",
        "img4.jpg",
        "RR.jpg",
        "img6.jpg",
        "lambo.jpg",
        "Ford.jpg"
      ];
      foreach ($images as $img): ?>
        <img src="<?= $img ?>" class="rounded-xl shadow img-hover-raise flex-shrink-0" style="width: 9rem; height: 15rem; object-fit: cover;" alt="Person">
      <?php endforeach; ?>
    </div>
  </section>
  <?php include 'TopToBottom.php' ?>

  <?php include 'stored.php' ?>



  <form method="POST" action="project_1.php" class="text-sm d-flex flex-column align-items-center p-4 mb-2">
    <p class="fs-5 text-primary fw-medium pb-2">Contact Us</p>
    <h1 class="display-6 fw-semibold pb-3 text-center">Get in touch with us</h1>
    <p class="text-center pb-4">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
      Lorem Ipsum has been the industry's standard dummy text.
    </p>

    <div class="row gx-4 gy-3 w-100 justify-content-center" style="max-width: 700px;">
      <div class="col-md-6">
        <label for="name" class="form-label">userName</label>
        <input type="text" name="user" id="user" class="form-control border rounded" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" name="email" id="email" class="form-control border rounded" required>
      </div>
      <div class="col-md-6">
        <label for="password" class="form-label">Your Password</label>
        <input type="password" name="password" id="password" class="form-control border rounded" required>
      </div>
    </div>

    <div class="w-100 mt-4" style="max-width: 700px;">
      <label for="message" class="form-label">Message</label>
      <textarea name="message" id="message" rows="6" class="form-control border rounded" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-4 px-4 py-2 w-40">Send Message</button>
  </form>

  <?php include 'Footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Send or save data
    echo "<div class='alert alert-success'>Thanks, $name! We received your message.</div>";
  }
  ?>


</body>

</html>
<?php if (isset($_GET['login']) && $_GET['login'] === 'success'): ?>
  <script>
    alert("Login Successful!");
  </script>
<?php endif; ?>
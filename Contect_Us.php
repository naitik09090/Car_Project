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


<form method="POST" action="project_1.php" class="text-sm d-flex flex-column align-items-center p-4 mb-2">
    <p class="fs-5 text-primary fw-medium pb-2">Contact Us</p>
    <h1 class="display-6 fw-semibold text-secondary pb-3 text-center">Get in touch with us</h1>
    <p class="text-muted text-center pb-4">
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

</body>
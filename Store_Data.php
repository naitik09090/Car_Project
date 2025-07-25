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
      .rounded-xl {
      border-radius: 1rem;
    }
    

    .img-hover-raise:hover {
      transform: translateY(-4px);
      transition: transform 0.3s ease;
    }

    .bg-glass {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .scroll-container {
      overflow-x: auto;
      white-space: nowrap;
    }

    .line-clamp-3 {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }

    .image-card {
      position: relative;
      width: 225px;
      height: 160px;
      background-color: #f8f8f8;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10px;
    }

    .image-card img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 60px;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      text-align: center;
      font-size: 14px;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .image-card:hover .overlay {
      opacity: 1;
    }
    .image-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
    }
</style>
</head>

<body class="bg-black text-white">
  <?php include 'BottomToTop.php' ?>

  <?php include 'Navbar.php' ?>

<div class="container text-center py-5">
    <h1 class="fw-semibold fs-2">Our Latest Creations</h1>
    <p class="mx-auto" style="max-width: 600px;">
      A visual collection of our most recent works – each piece crafted with intention, emotion, and style.
    </p>

    <div class="d-flex flex-wrap justify-content-center gap-4 mt-5">
      <?php
      $images = [
        ["file" => "bmw_logo.png", "link" => "./cars/bmw.php"],
        ["file" => "Marcides_logo.png", "link" => "./cars/marcides.php"],
        ["file" => "Ford_logo.png", "link" => "./cars/ford.php"],
        ["file" => "RangeRover_logo.png", "link" => "./cars/rangerover.php"],
        ["file" => "Ferrari_logo.png", "link" => "./cars/ferrari.php"],
        ["file" => "Lamborgini_logo.png", "link" => "./cars/lamborghini.php"],
        ["file" => "Supra_logo.png", "link" => "./cars/supra.php"],
        ["file" => "Mustang_logo.png", "link" => "./cars/mustang.php"],
        ["file" => "Bugatti_logo.png", "link" => "./cars/bugatti.php"],
        ["file" => "RR_logo.png", "link" => "./cars/rollsroyce.php"],
      ];

      foreach ($images as $item):
    ?>
      <div class="image-card">
        <img src="<?= $item['file'] ?>" alt="Image">
        <div class="overlay">
          <h5 class="mb-1">More Image</h5>
          <a href="<?= $item['link'] ?>">
            Show More
          </a>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>

  <?php include 'Footer.php' ?>

  <!-- Bootstrap + Menu Script -->
<script>
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('d-none');
    mobileMenu.classList.toggle('d-flex');
  });
</script>

</body>
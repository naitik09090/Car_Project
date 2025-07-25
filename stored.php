<style>
  .icon-hover:hover {
        transform: translateY(-2px);
        transition: all 0.3s ease-in-out;
    }
    .hover-expand {
      transition: all 0.5s ease;
      flex: 1 1 0;
      overflow: hidden;
      position: relative;
      height: 400px;
      min-width: 180px;
    }

    .hover-expand img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .hover-overlay {
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .hover-expand:hover {
      flex: 3 1 0;
    }

    .hover-expand:hover .hover-overlay {
      opacity: 1;
    }

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
      background: rgba(0, 0, 0, 0.9);
      color: #fff;
      text-align: center;
      font-size: 15px;
      font-weight: 600;
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

<body class="bg-dark text-white">

<div class="container text-center py-5">
    <h1 class="fw-semibold fs-2">Our Latest Creations</h1>
    <p class="mx-auto" style="max-width: 600px;">
      A visual collection of our most recent works – each piece crafted with intention, emotion, and style.
    </p>

    <div class="d-flex flex-wrap justify-content-center gap-4 mt-5">
      <div class="image-grid">
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
  </div>

  <!-- Make sure Bootstrap 5 CSS is included in your HTML head -->
</body>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Car Gallery</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">

  <style>

   * {
      font-family: 'Poppins', sans-serif;
    }
  
  .nav-hover {
  overflow: hidden;
  height: 1.5rem;
  display: inline-block;
  position: relative;
}

.nav-hover span {
  display: block;
  transition: transform 0.3s ease;
}

.nav-hover span:last-child {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
}

/* On hover: move both spans */
.nav-hover:hover span:first-child {
  transform: translateY(-100%);
}

.nav-hover:hover span:last-child {
  transform: translateY(-100%);
}

.hover-zoom:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease;
    }

    .btn-white-glow {
        background-color: #fff;
        color: #000;
        padding: 0.5rem 1rem;
        border-radius: 999px; /* pill shape */
        font-weight: 500;
        width: auto;
        transition: all 0.3s ease;
        box-shadow: 0px 0px 30px 7px rgba(255, 255, 255, 0.5);
    }

    .btn-white-glow:hover {
        box-shadow: 0px 0px 30px 14px rgba(255, 255, 255, 0.5);
        background-color: #f1f5f9; /* Bootstrap slate-100 equivalent */
    }

    .logo_1 {
        background-color: transparent;
        color: #000;
        border-radius: 999px; /* pill shape */
        font-weight: 500;
        width: auto;
        transition: all 0.3s ease;
        box-shadow: 0px 0px 30px 7px rgba(255, 255, 255, 0.5);
    }

    .logo_1:hover {
        transform: scale(1.2);
        box-shadow: 0px 0px 30px 14px rgba(255, 255, 255, 0.5);
        background-color: #f1f5f9; /* Bootstrap slate-100 equivalent */
    }
    


</style>

<body class="bg-black text-white">

<?php include 'Navbar.php' ?>

<?php
$images = [
  "https://www.hdcarwallpapers.com/walls/toyota_gr_supra_lightweight_evo_2026-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/toyota_gr_supra_sport_top_concept_2020_4k-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/toyota_gr_supra_gt4_concept_2019_4k_5k-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/adro_toyota_gr_supra_mk5_facelift_kit_4k-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/manhart_supra_gr_550_2024_5k-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/toyota_supra_classic-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/toyota_supra_mk4_retro_ai-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/toyota_supra_turbo_jdm-HD.jpg",
  "https://www.hdcarwallpapers.com/walls/toyota_supra_a90_4k-HD.jpg",
];
?>

<div class="container py-5">
  <div class="row justify-content-center mb-4">
    <div class="col-md-12">
      <img id="main-image" src="<?= $images[0] ?>" class="img-fluid rounded" alt="Main Image">
    </div>
  </div>

  <div class="row justify-content-center g-3" id="thumbnail-container">
    <?php foreach ($images as $index => $img): ?>
      <div class="col-3 col-sm-2 col-md-2">
        <img src="<?= $img ?>" class="img-thumbnail thumb cursor-pointer" alt="Thumbnail <?= $index + 1 ?>">
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script>
  document.getElementById('thumbnail-container').addEventListener('click', function (e) {
    if (e.target.classList.contains('thumb')) {
      document.getElementById('main-image').src = e.target.src;
    }
  });
</script>



</body>
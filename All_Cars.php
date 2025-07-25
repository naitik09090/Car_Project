<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BMW Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card img {
      cursor: pointer;
    }
    .modal-body img {
      object-fit: contain;
    }
  </style>
</head>
<body class="bg-black text-white">
<?php include 'BottomToTop.php'; ?>
<?php include 'Navbar.php'; ?>

<div class="container py-5">
  <div class="row g-4 justify-content-center">

    <?php include 'Gallery_ImG.php' ?>

    

  </div>
</div>

<!-- Fullscreen Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-black border-0">
      <div class="modal-body p-0 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <img id="modalImage" src="" class="w-100 h-100" alt="Full Image">
      </div>
    </div>
  </div>
</div>

<!-- Tilt and Modal Script -->
<script>
  const threshold = 12;

  <?php foreach ($images as $index => $img): ?>
    const card<?= $index ?> = document.getElementById('tilt-card-<?= $index ?>');

    card<?= $index ?>.addEventListener('mousemove', function (e) {
      const rect = card<?= $index ?>.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      card<?= $index ?>.style.transform = `perspective(1000px) rotateX(${y * -threshold}deg) rotateY(${x * threshold}deg)`;
    });

    card<?= $index ?>.addEventListener('mouseleave', function () {
      card<?= $index ?>.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
    });
  <?php endforeach; ?>

  // Show clicked image in modal
  function showImageModal(imageUrl) {
    document.getElementById('modalImage').src = imageUrl;
  }
</script>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

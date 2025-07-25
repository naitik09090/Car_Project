<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scroll to Next Topic</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
      height: 300px;
      min-width: 180px;
    }

    .hover-expand img {
      width: 90%;
      height: 90%;
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

    #scrollNextBtn {
      bottom: 20px;
      right: 940px;
      z-index: 1000;
      display: block;
      background-color: transparent;
      color: #fff;
      height: 50px;
      width: 50px;
      border-radius: 999px;
      font-weight: 500;
      padding: 0.5rem 1rem;
      font-size: 1.5rem;
      border: none;
      transition: all 0.5s ease-in-out;
      transform: translateY(-50px) rotate(180deg) scale(0.5) opacity(0);
    }

    /* Hover Effect */
    #scrollNextBtn:hover {
      color: black;
      background-color: #f1f5f9;
      box-shadow: 0px 0px 30px 14px rgba(255, 255, 255, 0.5);
    }

    /* Responsive right spacing for small screens */
    @media (max-width: 576px) {
      #scrollNextBtn {
        right: 130px;
        bottom: 100px;
        font-size: 1.2rem;
        padding: 0.4rem 0.8rem;
      }
    }

    @media (min-width: 577px) and (max-width: 992px) {
      #scrollNextBtn {
        right: 310px;
      }
    }

    .TopModel_4{
      margin-top: 110px;
    }

  </style>
</head>
<body>

<div class="container text-center">
  <?php
    echo '<button id="scrollNextBtn" class="logo_1 position-fixed">↓</button>';
  ?>
</div>


<div class="container TopModel_4 py-5" id="topic2">
  <h1 class="text-center fw-semibold display-6">luxurious Cars Top Models</h1>
  <p class="text-center mx-auto mt-2" style="max-width: 600px;">
    A visual collection of our most works – each piece crafted with intention, emotion, and style.
  </p>

  <div class="d-flex flex-wrap justify-content-center gap-3 mt-5">
    <?php
    $cards = [
      [
        "title" => "Rolls Royce Top Model",
        "img" => "rolls royce.jpg",
        "link" => "/First_Data/cars/rollsroyce.php"
      ],
      [
        "title" => "Bugatti Top Model",
        "img" => "bugatti.jpg",
        "link" => "/First_Data/cars/bugatti.php"
      ],
      [
        "title" => "Ferrari Top Model",
        "img" => "ferrari.jpg",
        "link" => "/First_Data/cars/ferrari.php"
      ],
      [
        "title" => "Lamborgini Top Model",
        "img" => "lamborgini.jpg",
         "link" => "/First_Data/cars/lamborghini.php"
      ]
    ];
    foreach ($cards as $card): ?>
  <div class="hover-expand d-flex">
    <img src="<?= $card['img'] ?>" alt="<?= $card['title'] ?>">
    <div class="hover-overlay">
      <h3><?= $card['title'] ?></h3>
      <p class="small">Bridging the gap between human intent and machine understanding through expert prompt design.</p>
      <a href="<?= $card['link'] ?>">
        <button>
          More Image
        </button>
          </a>
    </div>
  </div>
<?php endforeach; ?>
  </div>
</div>

<!-- Scroll Script -->
<script>
  document.getElementById("scrollNextBtn").addEventListener("click", function () {
    const nextSection = document.getElementById("topic2");
    nextSection.scrollIntoView({ behavior: "smooth" });
  });
</script>

<!-- JavaScript -->
<script>
  const scrollBtn = document.getElementById("scrollNextBtn");
  const nextTopic = document.getElementById("topic2");

  // Show/hide on scroll
  window.addEventListener("scroll", () => {
    if (window.scrollY < 100) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  });

  // Scroll to next topic on click
  scrollBtn.addEventListener("click", function () {
    nextTopic.scrollIntoView({ behavior: "smooth" });

    // Hide button after scroll
    setTimeout(() => {
      scrollBtn.style.display = "none";
    }, 800);
  });
</script>


</body>
</html>

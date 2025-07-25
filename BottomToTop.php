<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scroll to Top</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #scrollTopBtn {
            background-color: transparent;
            position: fixed;
            bottom: 0px;
            right: 30px;
            display: none;
            z-index: 1000;
        }
        .tire1{
            height: 50px;
            width: 50px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- Scroll To Top Button -->
<?php
echo '<p id="scrollTopBtn">
        <img src="tire5.png" class="tire1" />
      </p>';
?>

<!-- Bootstrap JS + Scroll Script -->
<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    // Show button after scrolling down 200px
    window.onscroll = function () {
        if (document.documentElement.scrollTop > 200) {
            scrollTopBtn.style.display = "block";
        } else {
            scrollTopBtn.style.display = "none";
        }
    };

    // Scroll to top on click
    scrollTopBtn.onclick = function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };
</script>

</body>
</html>

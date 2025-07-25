<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        border-radius: 999px;
        /* pill shape */
        font-weight: 500;
        width: auto;
        transition: all 0.3s ease;
        box-shadow: 0px 0px 30px 7px rgba(255, 255, 255, 0.5);
    }

    .btn-white-glow:hover {
        box-shadow: 0px 0px 30px 14px rgba(255, 255, 255, 0.5);
        background-color: #f1f5f9;
        /* Bootstrap slate-100 equivalent */
    }

    .logo_1 {
        background-color: transparent;
        color: #000;
        border-radius: 999px;
        /* pill shape */
        font-weight: 500;
        width: auto;
        transition: all 0.3s ease;
        box-shadow: 0px 0px 30px 7px rgba(255, 255, 255, 0.5);
    }

    .logo_1:hover {
        transform: scale(1.2);
        box-shadow: 0px 0px 30px 14px rgba(255, 255, 255, 0.5);
        background-color: #f1f5f9;
        /* Bootstrap slate-100 equivalent */
    }
</style>

<body class="bg-dark text-white">

    <!-- Navbar -->
    <nav
        class="container d-flex align-items-center justify-content-between px-4 py-3 rounded-pill border border-secondary mt-4 mb-5">

        <!-- Logo -->
        <a href="/First_Data/index.php">
            <img class="logo_1" src="Raiyani_Logo.png" width="40" height="40" />
        </a>

        <!-- Desktop Navigation and Buttons -->
        <div
            class="d-none d-md-flex align-items-center gap-4 ms-4 position-relative flex-grow-1 justify-content-between">

            <div class="d-flex align-items-center gap-4">
                <a href="/First_Data/index.php" class="nav-hover text-white text-decoration-none position-relative">
                    <span><?= "Home" ?></span>
                    <span><?= "Home" ?></span>
                </a>

                <a href="/First_Data/Store_Data.php" class="nav-hover text-white text-decoration-none position-relative">
                    <span><?= "Store" ?></span>
                    <span><?= "Store" ?></span>
                </a>

                <a href="/First_Data/Car_Price.php" class="nav-hover text-white text-decoration-none position-relative">
                    <span><?= "Pricing" ?></span>
                    <span><?= "Pricing" ?></span>
                </a>
            </div>

            <div class="d-flex align-items-center gap-3">
                <?php if (!isset($_SESSION['user'])): ?>
                    <a href="/First_Data/Contect_Us.php">
                        <button class="btn btn-outline-light rounded-pill px-4 py-2">Contact Us</button>
                    </a>
                <?php endif; ?>
                <?php if (!isset($_SESSION['user'])): ?>
                    <a href="/First_Data/login_1.php">
                        <button class="btn-white-glow border-0">Login</button>
                    </a>
                <?php else: ?>
                    <span class="text-white me-2">Welcome, <?= $_SESSION['user'] ?></span>
                    <a href="/First_Data/logOut.php">
                        <button class="btn btn-outline-danger rounded-pill px-4 py-2">Logout</button>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Mobile Toggle Button -->
        <button class="btn btn-outline-secondary d-md-none" id="menuToggle">
            <svg class="bi bi-list" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12.5a.5.5 0 0 1 0-1H13.5a.5.5 0 0 1 0 1H2.5zm0-4a.5.5 0 0 1 0-1H13.5a.5.5 0 0 1 0 1H2.5zm0-4a.5.5 0 0 1 0-1H13.5a.5.5 0 0 1 0 1H2.5z" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="d-none flex-column align-items-center gap-3 text-center bg-black text-white mb-4 py-3 rounded">
        <a href="/First_Data/index.php" class="text-white text-decoration-none">Home</a>
        <a href="/First_Data/Store_Data.php" class="text-white text-decoration-none">Store</a>
        <a href="/First_Data/Car_Price.php" class="text-white text-decoration-none">Pricing</a>
        <?php if (!isset($_SESSION['user'])): ?>
            <a href="/First_Data/Contect_Us.php">
                <button class="btn btn-outline-light rounded-pill px-4 py-2">Contact Us</button>
            </a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['user'])): ?>
            <a href="/First_Data/login_1.php">
                <button class="btn btn-light text-dark rounded-pill px-4 py-2 shadow-glow">Login</button>
            </a>
        <?php else: ?>
            <span class="text-white me-2">Welcome, <?= $_SESSION['user'] ?></span>
            <a href="/First_Data/logOut.php">
                <button class="btn btn-outline-danger rounded-pill px-4 py-2">Logout</button>
            </a>
        <?php endif; ?>
    </div>

    <!-- Toggle Script -->
    <script>
        const toggleBtn = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('d-none');
            mobileMenu.classList.toggle('d-flex');
        });
    </script>
</body>
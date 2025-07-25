<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pricing Card</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        /* Custom gradient badge */
        .bg-gradient {
            background: linear-gradient(90deg, #f97316, #ec4899);
            /* orange to pink */
        }
    </style>
</head>

<body class="bg-black text-white">

    <?php include 'BottomToTop.php' ?>

    <?php include 'Navbar.php' ?>

    <div class="container my-4">
        <div>
            <h1 class="text-center mb-5"> Top Models </h1>
        </div>
        <div class="row g-4">
            <?php
            // Array of cards data
            $cards = [
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/bmw_vision_neue_klasse_8k-HD.jpg',
                    'title' => 'bmw vision neue klasse',
                    'price' => '$100079'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/mercedes_amg_sl_63_4matic__2023-HD.jpg',
                    'title' => 'Mercedes EQS Sedan',
                    'price' => '$102000'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/audi_abt_xgt-HD.jpg',
                    'title' => 'Audi e-tron Sportback',
                    'price' => '$85000'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/porsche_taycan_4s_ferragamo_edition_2025-HD.jpg',
                    'title' => 'Porsche Taycan',
                    'price' => '$90000'
                ],

                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/ferrari_monza_sp2_2-HD.jpg',
                    'title' => 'ferrari monza sp2',
                    'price' => '$200070'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/lamborghini_sian_fkp_37_8k_black-HD.jpg',
                    'title' => 'lamborghini sian fkp',
                    'price' => '$302000'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/ford_mustang_gt_convertible_2025-HD.jpg',
                    'title' => 'ford mustang gt convertible',
                    'price' => '$285000'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/bugatti_w16_mistral_2-HD.jpg',
                    'title' => 'bugatti w16 mistral',
                    'price' => '$390000'
                ],

                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/toyota_gr_supra_lightweight_evo_2026-HD.jpg',
                    'title' => 'toyota gr supra',
                    'price' => '$400070'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/range_rover_sport_p530_4k-HD.jpg',
                    'title' => 'range rover sport p530',
                    'price' => '$202000'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/ford_f_150_raptor_8k_2-HD.jpg',
                    'title' => 'ford f 150 raptor',
                    'price' => '$385000'
                ],
                [
                    'img' => 'https://www.hdcarwallpapers.com/walls/pagani_alisea_by_ied_2024_2-HD.jpg',
                    'title' => 'pagani alisea by ied',
                    'price' => '$490000'
                ],
            ];

            foreach ($cards as $card) {
                echo '
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow border-2 border-dark h-100">
                        <img src="' . htmlspecialchars($card['img']) . '" class="card-img-top" alt="' . htmlspecialchars($card['title']) . '">
                        <div class="card-header bg-white text-center">
                            <p class="text-muted mb-0">' . htmlspecialchars($card['title']) . '</p>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <div class="mb-0 text-center">
                                <span class="h3 fw-bold">' . htmlspecialchars($card['price']) . '</span>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <form method="POST" action="payment_Method.php">
                                <input type="hidden" name="product_title" value="' . htmlspecialchars($card['title']) . '">
                                <input type="hidden" name="product_price" value="' . htmlspecialchars($card['price']) . '">
                                <input type="hidden" name="product_img" value="' . htmlspecialchars($card['img']) . '">
                                <button type="submit" class="btn btn-dark w-100">Buy Now</button>
                            </form>
                        </div>
                    </div>
                </div>';
            }
            ?>

        </div>
        <!-- Bootstrap 5 JS Bundle (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
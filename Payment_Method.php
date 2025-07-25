<?php session_start(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Selection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .payment-icons img {
            height: 40px;
            margin: 0 10px;
            cursor: pointer;
            filter: grayscale(1);
            transition: 0.3s;
        }

        .payment-icons img.selected {
            filter: none;
        }
    </style>
</head>

<body>
    <?php include 'Navbar.php' ?>

    <div class="container my-5">
        <div class="card p-4 mb-4 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-center mb-3">Payment Type</h5>

            <form id="paymentForm">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentType" id="creditCard" value="credit" checked>
                    <label class="form-check-label" for="creditCard">Credit Cards</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentType" id="debitCard" value="debit">
                    <label class="form-check-label" for="debitCard">Debit Cards</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="paymentType" id="cod" value="cod">
                    <label class="form-check-label" for="cod">Cash on Delivery</label>
                </div>

                <div class="payment-icons text-center mb-3">
                    <a href="https://www.americanexpress.com/" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/amex.png" id="amexIcon">
                    </a>

                    <a href="https://www.visa.com/" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/visa.png" id="visaIcon">
                    </a>

                    <a href="https://www.mastercard.com/" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" id="mastercardIcon">
                    </a>

                </div>

                <div class="text-center">
                    <button type="button" class="btn btn-primary w-100" onclick="showSelectedForm()">Place an Order</button>
                </div>
            </form>
        </div>

        <!-- Forms for each payment type -->
        <div id="creditForm" class="card p-4 mt-4 d-none">
            <h5>Credit Card Details</h5>
            <form method="post">
                <input type="text" class="form-control mb-2" placeholder="Name on Card" required>
                <input type="text" class="form-control mb-2" placeholder="Card Number" required>
                <button type="button" class="btn btn-success" onclick="showAlertAndRedirect()">Pay Now</button>
            </form>
        </div>


        <div id="debitForm" class="card p-4 mt-4 d-none">
            <h5>Debit Card Details</h5>
            <form method="post">
                <input type="text" class="form-control mb-2" placeholder="Name on Card" required>
                <input type="text" class="form-control mb-2" placeholder="Card Number" required>
                <button type="button" class="btn btn-success" onclick="showAlertAndRedirect()">Pay Now</button>
            </form>
        </div>

        <div id="codForm" class="card p-4 mt-4 d-none">
            <h5>Cash on Delivery</h5>
            <p>No payment needed now. Pay when product arrives.</p>
            <form method="post">
                <button type="button" class="btn btn-success" onclick="showAlertAndRedirect1()">Confirm Order</button>
            </form>
        </div>

        <!-- Selected Product -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['product_title'] ?? '';
            $price = $_POST['product_price'] ?? '';
            $img = $_POST['product_img'] ?? '';

            // Do something with the data: display summary, save to DB, etc.
            echo "<h2 class='text-center py-2'>You selected: $title</h2>";
            echo "<p class='text-center'>Price: $price</p>";
            echo "<div class='text-center'> <img src='$img' alt='Product Image' class='img-fluid' style='max-width: 700px; width: 100%; height: auto; object-fit: contain;'></div>";
        } else {
            echo "<p>No product selected.</p>";
        }
        ?>

    </div>

    <script>
        function showSelectedForm() {
            const selected = document.querySelector('input[name="paymentType"]:checked').value;
            document.getElementById('paymentForm').style.display = 'none';

            document.getElementById('creditForm').classList.add('d-none');
            document.getElementById('debitForm').classList.add('d-none');
            document.getElementById('codForm').classList.add('d-none');

            if (selected === 'credit') {
                document.getElementById('creditForm').classList.remove('d-none');
            } else if (selected === 'debit') {
                document.getElementById('debitForm').classList.remove('d-none');
            } else {
                document.getElementById('codForm').classList.remove('d-none');
            }
        }

        // Icon highlighting logic
        const icons = document.querySelectorAll('.payment-icons img');
        icons.forEach(icon => {
            icon.addEventListener('click', () => {
                icons.forEach(i => i.classList.remove('selected'));
                icon.classList.add('selected');
            });
        });
    </script>

    <script>
        function showAlertAndRedirect() {
            alert("Payment Successful!");
            window.location.href = "index.php"; // Change to your homepage if different
        }
    </script>

    <script>
        function showAlertAndRedirect1() {
            alert("Order Successful!");
            window.location.href = "index.php"; // Change to your homepage if different
        }
    </script>




</body>

</html>
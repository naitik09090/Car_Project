
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Payment received!</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
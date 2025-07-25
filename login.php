<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "project_1";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "No Connection";
}

mysqli_select_db($con, 'project_1');

$Your_Email = $_POST['email'];
$Your_Password = $_POST['password'];

$query = " insert into login (Your_Email,Your_Password) values('$Your_Email','$Your_Password') ";

echo "$query";
mysqli_query($con, $query);
header('location:index.php');
?>

<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user from DB
$query = "SELECT * FROM login WHERE Your_Email = '$email' AND Your_Password = '$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) === 1) {
    $_SESSION['user'] = $email;
    header("Location: index.php?login=success");
    exit();
} else {
    echo "<script>alert('Invalid Credentials'); window.location.href='login_1.php';</script>";
}
?>

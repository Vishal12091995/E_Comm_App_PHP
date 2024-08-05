<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "e_commerce");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$admin_name = mysqli_real_escape_string($conn, $_POST['username']);
$admin_password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare and execute SQL query
$query = "SELECT * FROM `admin` WHERE `username` = '$admin_name' AND `password` = '$admin_password'";
$result = mysqli_query($conn, $query);
session_start();
// Check the result
if ($result && mysqli_num_rows($result) > 0) {
    $_SESSION['admin']= $admin_name;
    echo "
    <script>
    alert('Login Successfully');
    window.location.href='../mystore.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Login not Successful');
    window.location.href='login.php';
    </script>
    ";
}

// Close the database connection
mysqli_close($conn);
?>
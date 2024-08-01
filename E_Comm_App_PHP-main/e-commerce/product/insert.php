<?php
if (isset($_POST["submit"])) {

    include "config.php";

    $p_detail = $_POST['pdetail'];
    $p_name = $_POST['pname'];
    $p_price = $_POST['price'];
    $p_category = $_POST['pcategory'];
    $image_location = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $target_dir = "uploaded_images/";
    $target_file = $target_dir . $image_name;
    move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file);

    //insert Product

    // Prepare an SQL statement for execution
    $query = $conn->prepare("INSERT INTO `tblproduct` (`pname`, `pdesc`, `pprice`, `pcategory`, `plocation`) VALUES (?, ?, ?, ?, ?)");
    header("Location:index.php");

    // Bind variables to the parameter markers of the prepared statement

    $query->bind_param("ssdss", $p_name, $p_detail, $p_price, $p_category, $target_file);
    $query->execute();
    $query->close();

    // Close the database connection (if done with it)
    $conn->close();
}

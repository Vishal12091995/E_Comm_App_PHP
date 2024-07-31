<?php
if (isset($_POST["submit"])) {

    include"config.php";

    $p_detail = $_POST['pdetail'];
    $p_name = $_POST['pname'];
    $p_price = $_POST['price'];
    $p_category = $_POST['pcategory'];
    $image_location = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $target_dir = "uploaded_images/";
    $target_file = $target_dir . basename($image_name);
    move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file);
    
    //insert Product
    $query = "INSERT INTO `tblproduct` (`pname`, `pdesc`, `pprice`, `pcategory`, `plocation`) VALUES ('$p_name', '$p_detail', '$p_price', '$p_category', '$target_file')";
if(mysqli_query($conn,$query)){
    echo "Inserted";
}else{
    echo "Error in creating query". mysqli_error($conn);
}
}
?>
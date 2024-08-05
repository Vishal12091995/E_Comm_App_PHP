<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'][]=array();
}
$p_price = $_POST['price'];
$p_name = $_POST['Pro_name'];
$p_qty = $_POST['qty'];
if (isset($_POST['add_cart'])) {

    $check_product = array_column($_SESSION['cart'], 'p_name');
    if (in_array($p_name, $check_product)) {
        echo"
        <script>
        alert('Product already Added');
        window.location.href='index.php';
        </script>";
        print_r($_SESSION['cart']);
    }else{
        $_SESSION['cart'][] = array(
            'p_name' => $p_name,
            'p_price' => $p_price,
            'p_qty' => $p_qty
            
        );
        header('location:view_cart.php');
        
    }

    
    
}

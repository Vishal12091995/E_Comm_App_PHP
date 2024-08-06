<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


if (isset($_POST['add_cart'])) {
    $p_price = $_POST['price'];
    $p_name = $_POST['Pro_name'];
    $p_qty = $_POST['qty'];
    $check_product = array_column($_SESSION['cart'], 'p_name');
    if (in_array($p_name, $check_product)) {
        echo "
        <script>
        alert('Product already Added');
        window.location.href='index.php';
        </script>";
    } else {
        $_SESSION['cart'][] = array(
            'p_name' => $p_name,
            'p_price' => $p_price,
            'p_qty' => $p_qty
        );
        header('location:index.php');
    }
}

// Remove product
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['p_name'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:view_cart.php');
        }
    }
}

// Update product
if (isset($_POST['update'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_qty = $_POST['p_qty'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['p_name'] === $_POST['item']) {
            $_SESSION['cart'][$key] = array(
                'p_name' => $p_name,
                'p_price' => $p_price,
                'p_qty' => $p_qty
            );
            header('location:view_cart.php');
        }
    }
}

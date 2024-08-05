<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    
    ?>
    <header>
        <nav class="navbar navbar-expand-lg border border-dark bg-dark d-flex font-family-monospace">
            <div class="container">
                <a href="">
                    <i class="fa-brands fa-app-store-ios fs-3 px-2 fw-bold" height="70px"><span class="mx-2">E-Shopping Cart</span></i>
                </a>
            </div>
            <div class="">
                <div class="d-flex text-decoration-none pe-2">
                    <a href="index.php" class="text-decoration-none pe-2" width="50px"><i class="fa-solid fa-house">Home</i></a>
                    <a href="view_cart.php" class="text-decoration-none pe-2" width="50px"><i class="fa-solid fa-cart-shopping">Cart(<?php ?>)|</i></a>
                </div>
            </div>
            <div>
                <div class="d-flex">
                    <a href="" class="text-decoration-none pe-2" width="50px"><i class="fa-solid fa-user-tie">Hello,|</i></a>
                    <a href="logout.php" class="text-decoration-none pe-2" width="50px"><i class="fa-solid fa-arrow-right-to-bracket">Logout</i></a>
                    <a href="../admin/mystore.php" class="text-decoration-none pe-2" width="50px"><i class="fa-solid fa-user-tie">Admin</i></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="top_menu d-flex fw-bold justify-content-center bg-white">
        <a href="laptop.php" class="text-decoration-none px-3 border border-top-2  mb-2 bg-body-secondary"><h2>Laptop</h2></a>
        <a href="mobile.php" class="text-decoration-none px-3 border border-top-2  mb-2 bg-body-secondary"><h2>Mobile</h2></a>
        <a href="bag.php" class="text-decoration-none px-3 border border-top-2  mb-2 bg-body-secondary"><h2>Bag</h2></a>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
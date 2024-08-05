<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <?php
    include 'head.php';
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-primary">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9 text-center">
                <table class="table text-center table-bordered">
                    <thead class="bg-danger text-white">
                        <th>index no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        session_start();

                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            // echo $_SESSION["cart"];
                            $index = 1;
                            foreach ($_SESSION['cart'] as $value) {
                                $total = $value['p_price'] * $value['p_qty'];
                                echo "
                                    <form action='insert_cart.php' method='post'>
                                    <tr>
                                        <td>$index</td>
                                        <td>$value[p_name]</td>
                                        <td>$value[p_price]</td>
                                        <td>$value[p_qty]</td>
                                        <td>$total</td>
                                        <td><button name='remove' class='btn btn-warning'>Edit</button></td>
                                        <td><button class='btn btn-danger'>Delete</button></td>
                                    </tr>
                                    </form>
                                    ";
                                $index++;
                            }
                        } else {
                            echo "Error in getting value";
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
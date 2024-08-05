<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <?php
    include '../user/head.php';
    ?>
</head>

<body>
    <h1 class="text-center fw-bolder fs-3 text-decoration-underline">HOME-PAGE</h1>

    <div class="container">
        <div class="col-md-12 col-xs-12 col-lg-12">
            <div class="row">

                <?php
                include 'config.php';

                $record = mysqli_query($conn, "SELECT * FROM `tblproduct`");
                if ($record) {
                    while ($row = mysqli_fetch_assoc($record)) {
                        echo '
                    <div class="col-md-6 col-lg-4 mb-3">
                        <form action="insert_cart.php" method="post">
                            <div class="card text-center" style="width: 18rem;">
                                <img src="' . $row['plocation'] . '" class="card-img-top border border-black" alt="' . $row['pcategory'] . ' style="height:30rem;">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['pname'] . '</h5>
                                    <p class="card-text">' . $row['pdesc'] . '</p>
                                    <p class="card-text"><strong>Price:</strong> Rs.' . $row['pprice'] . '</p>
                                    <input type="hidden" name="Pro_name" value=" '.$row['pname'].'">
                                    <input type="hidden" name="price" value=" '.$row['pprice'].'">
                                    <input class="m-2" name="qty" type="number" value=" min="1" max="10"" placeholder="quantity" width="20px" >
                                    <input type="submit" name="add_cart" class="btn btn-danger text-white w-100" value="Add to cart" >
                                </div>
                            </div>
                        </form>
                    </div>';
                    }
                } else {
                    // If the query failed, display an error message
                    echo "<p>Error: " . mysqli_error($conn) . "</p>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>


</body>

</html>
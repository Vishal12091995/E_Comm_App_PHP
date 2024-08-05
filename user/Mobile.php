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
    <h1 class="text-center fw-bolder fs-3 text-decoration-underline">Mobile</h1>

    <div class="container">
        <div class="row">
            <?php
            include 'config.php';

            $record = mysqli_query($conn, "SELECT * FROM `tblproduct`");
            if ($record) {
                while ($row = mysqli_fetch_assoc($record)) {
                    if ($row['pcategory'] == 'mobile') {
                        echo '
                    <div class="col-md-4 mb-4">
                        <div class="card text-center" style="width: 25rem;">
                            <img src="' . $row['plocation'] . '" class="card-img-top" alt="' . $row['pname'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['pname'] . '</h5>
                                <p class="card-text">' . $row['pdesc'] . '</p>
                                <p class="card-text"><strong>Price:</strong> $' . $row['pprice'] . '</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>';
                    }
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


</body>

</html>
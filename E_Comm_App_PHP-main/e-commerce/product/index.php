<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <h1 class="text-center text-warning">Product Details</h1>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Details:</label>
                        <input class="form-control" name="pdetail" type="text" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Product name: </label>
                        <input class="form-control" name="pname" type="text" id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Price</label>
                        <input class="form-control" name="price" type="number" id="formFileDisabled">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Add Product Image</label>
                        <input class="form-control" name="pimage" type="file">
                    </div>
                    <div>
                        <select class="form-select" name="pcategory" aria-label="Default select example">
                            <option value="home" selected>Home</option>
                            <option value="laptop">Laptop</option>
                            <option value="bag">Bag</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn bg-danger fw-bold fs-5 my-3 form-control ">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <!-- fetch data -->
    <table class="table border bg-black mt-3 table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include 'config.php';

            // Fetch records from the database
            $Record = mysqli_query($conn, "SELECT * FROM `tblproduct`");

            if ($Record) {
                // Loop through each record
                while ($row = mysqli_fetch_assoc($Record)) {
                    echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['pname']}</td>
                            <td>{$row['pdesc']}</td>
                            <td>{$row['pprice']}</td>
                            <td><img src='{$row['plocation']}' alt='image' style='width: 100px; height: auto;'></td>
                            <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
                        </tr>
                        ";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            // Close the database connection if done
            mysqli_close($conn);
            ?>

        </tbody>

    </table>
</body>

</html>
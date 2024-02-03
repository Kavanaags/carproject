<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit 
                            <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['carid']))
                        {
                            $car_id = mysqli_real_escape_string($con, $_GET['carid']);
                            $query = "SELECT * FROM carinfo WHERE carid='$car_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $car = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="car_id" value="<?= $car['carid']; ?>">

                                    <div class="mb-3">
                                        <label>Car Name</label>
                                        <input type="text" name="carname" value="<?=$car['carname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Model</label>
                                        <input type="text" name="model" value="<?=$car['model'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Color</label>
                                        <input type="text" name="color" value="<?=$car['color'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="text" name="price" value="<?=$car['price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_car" class="btn btn-primary">
                                            Update Info
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
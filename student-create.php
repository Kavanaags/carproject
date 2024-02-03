<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>car</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add 
                            <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Car Name</label>
                                <input type="text" name="carname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Model</label>
                                <input type="text" name="model" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Color</label>
                                <input type="text" name="color" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_car" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_car']))
{
    $car_id = mysqli_real_escape_string($con, $_POST['delete_car']);

    $query = "DELETE FROM carinfo WHERE carid='$car_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Deleted Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Deleted";
        header("Location: index2.php");
        exit(0);
    }
}

if(isset($_POST['update_car']))
{
    $car_id = mysqli_real_escape_string($con, $_POST['car_id']);

    $name = mysqli_real_escape_string($con, $_POST['carname']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $color = mysqli_real_escape_string($con, $_POST['color']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "UPDATE carinfo SET carname='$name', model='$model', color='$color', price='$price' WHERE carid='$car_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Updated Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Updated";
        header("Location: index2.php");
        exit(0);
    }

}


if(isset($_POST['save_car']))
{
    $name = mysqli_real_escape_string($con, $_POST['carname']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $color = mysqli_real_escape_string($con, $_POST['color']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "INSERT INTO carinfo (carname,model,color,price) VALUES ('$name','$model','$color','$price')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
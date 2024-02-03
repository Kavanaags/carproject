<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "car";

  $conn = new mysqli($host, $dbusername, $dbpassword,$dbname);
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);

    }

// validate login authentication
$query= "SELECT *FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if($result->num_rows == 1){
    header("Location: index1.php");
    exit();
}
else{
    exit();
}


}

?>
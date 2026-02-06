<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "dristidb";

$con = mysqli_connect($host, $user, $pw, $db);
if(!$con){
    die("Error".mysqli_connect_error());
}
echo "connected";

$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"],PASSWORD_DEFAULT);

$query = "insert into users(first_name, last_name, email, password) values('$f_name', '$l_name', '$email', '$password')";

$res = mysqli_query($con, $query);
if($res){
    echo "User Registration Successful";
}
else{
    echo "Registration Error Occurred.";
}
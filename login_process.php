<?php

if(empty($_POST["username"]) | empty($_POST["password"])){
    header("Location:login.php");
}
$user = $_POST["username"];
$pass = $_POST["password"];

/*if($user == "admin" & $pass == "123"){
    header("Location:dashboard.php");

}
else{
    header("Location:login.php");
}
?> */
$host = "localhost";
$user = "root";
$pw = "";
$db = "dristidb";
$con = mysqli_connect($host, $user, $pw, $db);
if(!$con){
    die("Unable to connect".mysqli_connect_error());

}
$query = "select * from users email where email = '$user' ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if(password_verify($pass, $row["password"])){
    header("Location:dashboard.php");
} 
else{
    header("Location:login.php");
}
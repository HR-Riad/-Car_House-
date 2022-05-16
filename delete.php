<?php

session_start();
$user_email=$_SESSION['user_email'];
$useremail=$_SESSION['user_email'];
$conn = mysqli_connect('localhost','root','','myshop');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $read2 = "DELETE FROM cart WHERE productid='$id' AND usermail='$useremail'";
    $result2 = $conn->query($read2);  
     header('Location:cart.php');
}

?>
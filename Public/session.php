<?php
//change it
$con = mysqli_connect('localhost','root','bloomonlineshop','rulsey');

session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}

$id = $_SESSION['id'];

$query=mysqli_query ($con,"SELECT * FROM users WHERE user_id ='$id'");
$row=mysqli_fetch_array($query);
$cover_picture=$row['cover_picture'];
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
?>

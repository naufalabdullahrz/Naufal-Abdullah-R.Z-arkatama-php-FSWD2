<?php
$conn = mysqli_connect('127.0.0.1:3306','root','','sinauo');
$id = $_GET["id"];
$sid = mysqli_query($conn,"DELETE FROM users WHERE id ='$id'");
header("location:tabeluser.php");
?>
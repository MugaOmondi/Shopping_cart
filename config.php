<?php 
$conn=new mysqli('localhost','root','','cart_system');
if($conn->connect_error){
die("connection failed!".$conn->connect_error);
}
?>

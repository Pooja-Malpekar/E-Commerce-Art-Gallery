<?php
$conn=mysqli_connect('localhost','root','','mystore');
if(!$conn){
    die(mysqli_error($conn));
}
?>
<!-- die("Error".mysqli_connect_error()); -->
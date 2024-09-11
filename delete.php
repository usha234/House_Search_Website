<?php
$conn=mysqli_connect("localhost","root","","state");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id=$_GET['id'];

$qr="delete from house where id=$id";
if(mysqli_query($conn,$qr)){
    header("Location:retrieve.php");
}

?>
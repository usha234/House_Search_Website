<?php

$conn=mysqli_connect("localhost","root","","state");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$describes=$_REQUEST['describes'];
$rooms=$_REQUEST['rooms'];
$handled=$_REQUEST['handled'];
$buyorrent=$_REQUEST['buyorrent'];
$city=$_REQUEST['city'];
$mobile=$_REQUEST['mobile'];


$s="insert into house values('$id','$name','$address','$describes','$rooms','$handled','$buyorrent','$city','$mobile')";
$res=mysqli_query($conn,$s);
if($res){

    header("Location:retrieve.php");
}
 else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}



?>
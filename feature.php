<?php
$conn=mysqli_connect("localhost","root","","state");

$name=$_REQUEST['name'];
$rooms=$_REQUEST['rooms'];
echo $name;
echo $rooms;

$s="SELECT describes FROM house WHERE name='$name' and rooms='$rooms'";

$res=mysqli_query($conn,$s);


if (mysqli_num_rows($res) > 0) {
    while ($r = mysqli_fetch_array($res)) { 
      
    
           echo $r['describes'];


    }}

?>
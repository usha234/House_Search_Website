<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;

        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
        padding: 40px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    h1 {
        color: #4CAF50;
    }

    p {
        color: #333;
        font-size: 18px;
    }

    img {
        width: 100px;
        margin-bottom: 20px;
    }

    .b {
        height: 100%;
        background-image: url("adm.jpg");
        background-repeat: no-repeat;
        background-size: cover, contain;
        width: 100%;
        position: absolute;
        z-index: -1;
    }

    .bg-1 {
        z-index: 0;
        background: linear-gradient(to right, rgba(149, 14, 127, 0.179) 30%, rgba(242, 212, 20, 0.667) 65%, rgba(177, 30, 179, 0.5));
        background-size: 200% 200%;
        animation: gradient-animation 16s ease infinite;
        padding-left: 10px;
        height: 40%;
        padding-top: 6%;
        position: absolute;
        border-radius: 0px 0px 25% 25%/40%;
    }

    @keyframes gradient-animation {
        0% {
            background-position: 0% 50%;
        }
        25% {
            background-position: 50% 100%;
        }
        50% {
            background-position: 100% 50%;
        }
        75% {
            background-position: 50% 0%;
        }
        100% {
            background-position: 0% 50;
        }
    }
    .button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  background-color: blueviolet;
  color: #fff;
  border: 2px solid #3498db;
  transition: background-color 0.3s, color 0.3s;
}

.button:hover {
  background-color: violet;
  color: #fff;
}

.button:focus {
  outline: none;
}


.con {
  margin: 50px auto;
  text-align: center;
} 
  
</style>





</head>


  <center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 
      


 <body>

<?php  
session_start();
error_reporting(0);

if(isset($_POST['submit']))  
{  
$host="localhost"; 
$username="root"; 
$word=""; 
$db_name="state";  
 
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$brandlist = $_POST['brandslist']; 
  $custname=$_REQUEST['custname'];
  $custmobile=$_REQUEST['custmobile'];
  $arrival=$_REQUEST['arrival'];
  $d=$_REQUEST['d'];
  $t=$_REQUEST['t'];





foreach($brandlist as $branditems)
{



$arraydata = explode("-",$branditems);


//  echo $arraydata[0];
//  echo $arraydata[1];
//  echo $arraydata[2];
//  echo $arraydata[3];
//  echo $arraydata[4];
//  echo $arraydata[5];
//  echo $arraydata[6];
//  echo $arraydata[7];
//  echo $arraydata[8];


$q = "INSERT INTO customer (id,name,address,describes,rooms,handled,buyorrent,city,mobile,custname,custmobile,arrival,d,t) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$arraydata[5]','$arraydata[6]','$arraydata[7]','$arraydata[8]','$custname','$custmobile','$arrival','$d','$t')";
$res=mysqli_query($con,$q);
// if($res){
//     echo "success";
// }

} 
}
if($res){
?>


 
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-E5zmb43hrAVwRn85kS5WNrqrn_FjsalL6g&usqp=CAU" alt="Thank You">
        <h1>Data Stored Successfully</h1>


       <button><a href="custupdate.php?id=<?php echo $id; ?>">Edit</a></button>
        <button><a href="custdelete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a><button>

        <button><a href="c.html">Back</a></button> 
          

    </div>
    


    
</body>
</html>


<?php
}




?>


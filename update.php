<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="adm.css">
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "state");
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $qry = "SELECT * FROM house WHERE id=$id";
    $result = mysqli_query($conn, $qry);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $address = $row['address'];
        $describes = $row['describes'];
        $rooms = $row['rooms'];
        // $handled = $row['handled'];
        // $buyorrent = $row['buyorrent'];
        $city=$row['city'];
    } else {
        echo "No student found with that ID.";
        exit();
    }
}
?>

<form method="post">
    <h>House Details Form</h2>
    <h3><b><label>Landmark</label></b></h3>
    <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">

   
    <h3><b><label>Address</label></b></h3>
    <textarea id="address" name="address"><?php echo isset($address) ? $address : ''; ?></textarea>

    <h3><b><label>Description</label></b></h3>
    <textarea id="describes" name="describes"><?php echo isset($describes) ? $describes : ''; ?></textarea>

  
    <h3><b><label>Number of rooms</label></b></h3>
    <input type="int" name="rooms" value="<?php echo isset($rooms) ? $rooms : ''; ?>">

<!-- 
    <h3><b><label>Handled by whom</label></b></h3>
    <input type="radio" id="owner" name="handled" value="owner" value="<?php echo isset($handled) ? $handled: ''; ?>">
    <label>Owner</label><br>
    <input type="radio" id="broker" name="handled" value="broker" value="<?php echo isset($handled) ? $handled: ''; ?>">
    <label>Broker</label><br>

    <h3><b><label>Buy or rent</label></b></h3>

    <input type="radio" id="buy" name="buyorrent" value="buy" value="<?php echo isset($buyorrent) ? $buyorrent : ''; ?>">
    <label>Buy</label><br>
    <input type="radio" id="rent" name="buyorrent" value="rent" value="<?php echo isset($buyorrent) ? $buyorrent : ''; ?>"  >
    <label>Rent</label><br> -->




    <h3><b><label>City</label></b></h3>
    <input type="text" name="city" value="<?php echo isset($city) ? $city : ''; ?>">
    <h3><b><label>Mobile</label></b></h3>
    <input type="text" name="mobile" value="<?php echo isset($mobile) ? $mobile : ''; ?>">



    <input type="submit" name="update" value="Update">
</form>


<?php
if (isset($_POST['update'])) {
    $name=$_POST['name'];
    $address=$_POST['address'];
    $describes=$_POST['describes'];
    $rooms=$_POST['rooms'];
    // $handled=$_POST['handled'];
    // $buyorrent=$_POST['buyorrent'];
    $city=$_POST['city'];
    $mobile=$_POST['mobile'];

    
    $qry = "UPDATE house SET name='$name', address='$address', describes='$describes', rooms='$rooms',city='$city',mobile='$mobile' WHERE id=$id";

    if (mysqli_query($conn, $qry)) {
        header("Location: retrieve.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>

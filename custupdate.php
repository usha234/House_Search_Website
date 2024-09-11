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
    <h>Schedule Details Edit form</h2>
    
    <h3><b><label>Name</label></b></h3>
    <input type="text" name="custname" value="<?php echo isset($city) ? $city : ''; ?>">
    <h3><b><label>Mobile</label></b></h3>
    <input type="text" name="custmobile" value="<?php echo isset($mobile) ? $mobile : ''; ?>">



    <input type="submit" name="update" value="Update">
</form>


<?php
if (isset($_POST['update'])) {
    $custname=$_POST['custname'];
    $custmobile=$_POST['custmobile'];
    // $describes=$_POST['describes'];
    // $rooms=$_POST['rooms'];

    // $city=$_POST['city'];
    // $mobile=$_POST['mobile'];

    
    $qry = "UPDATE customer SET custname='$custname',custmobile='$custmobile' WHERE id=$id";

    if (mysqli_query($conn, $qry)) {
        header("Location: custretrive.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>
<body style="background-image: url('house.avif'); backdrop-filter: blur(15px);background-repeat:no-repeat;background-size:cover;">
    <h1 style="text-align: center">The Customer Visit details</h1>
    <table style="width:80%" border="1">
    <tr>
        <th>S.No</th>
        <th>Customer name</th>
        <th>Mobile</th>
        <th>Date of arrival</th>
        <!-- <th>Number of Rooms</th>
        <th>Managing by whom</th>
        <th>Buy or Rent</th>
        <th>City</th>
        <th>Mobile</th> -->


    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "state");
    $qe = "select custname,custmobile,d from customer where arrival='visit'";
    $res = mysqli_query($conn, $qe);
    $s = 1; 
    if (mysqli_num_rows($res) > 0) {
        while ($r = mysqli_fetch_array($res)) { 
  
    ?>
            <tr>
                <td><?php echo $s++; ?></td>
                <td><?php echo $r['custname']; ?></td>
                <td><?php echo $r['custmobile']; ?></td>
                <td><?php echo $r['d']; ?></td>
                <!-- <td><?php //echo $r['rooms']; ?></td>
                <td><?php //echo $r['handled']; ?></td>
                <td><?php //echo $r['buyorrent']; ?></td>
                <td><?php //echo $r['city']; ?></td>
                <td><?php //echo $r['mobile']; ?></td> -->

            </tr>
    <?php
        }
    }
    ?>
    </table>
    <center>
        <!-- <button style="border:2px solid pink" ><a href="admin.html" ><b>Add</b></a></button> -->
        <button style="border:2px solid pink" ><a href="intro2.html" ><b>Back</b></a></button>
   </center>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>
<body style="background-image: url('house.avif'); backdrop-filter: blur(15px);background-repeat:no-repeat;background-size:cover;">
    <h1 style="text-align: center">The House details</h1>
    <table style="width:80%" border="1">
    <tr>
        <th>S.No</th>
        <th>Landmark</th>
        <th>Address</th>
        <th>Description</th>
        <th>Number of Rooms</th>
        <th>Managing by whom</th>
        <th>Buy or Rent</th>
        <th>City</th>
        <th>Mobile</th>
        <th>Operation</th>

    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "state");
    $qe = "select * from house";
    $res = mysqli_query($conn, $qe);
    $s = 1; 
    if (mysqli_num_rows($res) > 0) {
        while ($r = mysqli_fetch_array($res)) { 
            $id = $r['id'];
    ?>
            <tr>
                <td><?php echo $s++; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['address']; ?></td>
                <td><?php echo $r['describes']; ?></td>
                <td><?php echo $r['rooms']; ?></td>
                <td><?php echo $r['handled']; ?></td>
                <td><?php echo $r['buyorrent']; ?></td>
                <td><?php echo $r['city']; ?></td>
                <td><?php echo $r['mobile']; ?></td>

                <td>
                    <a href="update.php?id=<?php echo $id; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    <!-- <a href="insert.php">Add</a> -->
                </td>
            </tr>
    <?php
        }
    }
    ?>
    </table>
    <center>
        <button style="border:2px solid pink" ><a href="admin.html" ><b>Add</b></a></button>
        <button style="border:2px solid pink" ><a href="intro.html" ><b>Back</b></a></button>
   </center>
</body>
</html>

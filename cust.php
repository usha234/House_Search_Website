 <?php

// $conn=mysqli_connect("localhost","root","","state");



// echo "Select the features you want for the home";

// $sq = "SELECT DISTINCT name FROM house";
// $resul = $conn->query($sq);

// $s="SELECT rooms FROM house";
// $res=$conn->query($s);



// echo "<form action='feature.php' method='post'>";
// echo "<select name='name' class='form-control'>";
// echo "<option> choose the landmark </option>";
// while ($row = $resul->fetch_assoc()) {
//     echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
// }
// echo "</select>";
//  echo nl2br("\n");
//  echo nl2br("\n");


//  echo "<select name='rooms' class='form-control'>";
// echo "<option> choose the number of rooms </option>";
// while ($row1 = $res->fetch_assoc()) {
//     echo "<option value='" . $row1['rooms'] . "'>" . $row1['rooms'] . "</option>";
// }
// echo "</select>";
//  echo nl2br("\n");
//  echo nl2br("\n");


//  echo "<button type='submit' value='submit'>Submit</button>";
//  echo "</form>";
 ?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Customer HOME PAGE</title>
  </head>

    <style>
        .bg-1 { 
    background-color:  #212020; /* Green */
    color: #ffffff;
  }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    

    <link href="admin_home.css" rel="stylesheet">
  </head>
  <body style="background-image: url('house.avif'); backdrop-filter: blur(15px);background-repeat:no-repeat;background-size:cover">
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for your sweet home matching to your taste</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                            
                           
    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Enter name">
            <input type="text" name="rooms" class="form-control" placeholder="Enter no. of rooms">
            <input type="text" name="city" class="form-control" placeholder="Enter city">
            <button type="submit" class="btn btn-primary">Search</button> 
        </div>
    </form>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">

                            <?php
$con = mysqli_connect("localhost", "root","", "state");

if (isset($_GET['name']) || isset($_GET['rooms']) || isset($_GET['city'])) {
    $name = $_GET['name'];
    $rooms = $_GET['rooms'];
    $city = $_GET['city'];
    
    $query = "SELECT distinct(id), name, address, describes, rooms, handled, buyorrent, city, mobile FROM house where name='$name'and rooms='$rooms'and city='$city'";    
    $query_run = mysqli_query($con, $query);

    echo mysqli_num_rows($query_run);

    if (mysqli_num_rows($query_run) > 0) {
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>address</th>
                    <th>describes</th>
                    <th>rooms</th>
                    <th>handled by whom</th>
                    <th>buy or rent</th>
                    <th>city</th>
                    <th>mobile</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($items = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td><?= $items['id']; ?></td>
                        <td><?= $items['name']; ?></td>
                        <td><?= $items['address']; ?></td>
                        <td><?= $items['describes']; ?></td>
                        <td><?= $items['rooms']; ?></td>
                        <td><?= $items['handled']; ?></td>
                        <td><?= $items['buyorrent']; ?></td>
                        <td><?= $items['city']; ?></td>
                        <td><?= $items['mobile']; ?></td>


                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "No Record Found";
    }
} else {
    $records = mysqli_query($con, "SELECT distinct(id),name,address,describes,rooms,handled,buyorrent,city,mobile FROM house");
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>address</th>
                <th>describes</th>
                <th>rooms</th>
                <th>handled by whom</th>
                <th>buy or rent</th>
                <th>city</th>
                <th>mobile</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($records)) {
                ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['describes']; ?></td>
                    <td><?php echo $data['rooms']; ?></td>
                    <td><?php echo $data['handled']; ?></td>
                    <td><?php echo $data['buyorrent']; ?></td>
                    <td><?php echo $data['city']; ?></td>
                    <td><?php echo $data['mobile']; ?></td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
}

?>


<strong><a href="c.html" class="btn btn-primary">BACK</a></strong>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
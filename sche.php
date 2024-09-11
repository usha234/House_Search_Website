<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>ADMIN HOME PAGE</title>
</head>

<style>
    .bg-1 {
        background-color: #212020;
        /* Green */
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


<!-- Custom styles for this template -->
<link href="admin_home.css" rel="stylesheet">
</head>

<body>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>LANDING HOME PAGE</title>
    </head>

    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .jumbotron {
            background-color: #212020;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-1 {
            background-color: #212020;
            /* Green */
            color: #ffffff;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: #212020;
            font-size: 50px;
        }

        .logo {
            color: #212020;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #212020;
        }

        .carousel-indicators li {
            border-color: #212020;
        }

        .carousel-indicators li.active {
            background-color: #212020;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid #212020;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #212020;
            background-color: #fff !important;
            color: #212020;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #212020 !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #212020;
            color: #fff;
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #212020;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }

            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
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

        section {
            margin-top: 20px;
            /* increase the distance from the nav bar */
            display: flex;
            justify-content: center;
            /* center the images horizontally */
        }

        .col {
            margin-left: 20px;
            /* increase the distance between the images */
            margin-right: 20px;
            /* increase the distance between the images */
        }
    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <?php

                if (isset($_SESSION['status'])) {
                    echo "<h4>" . $_SESSION['status'] . "</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Selection of Home to visit</h4>
                    </div>
                    <div class="card-body">

                        <form action="sche2.php" method="POST">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "state");
                            // $a = $_REQUEST['branch'];
                            // $u = $_REQUEST['ac'];
                        



                            // echo "<input type='text' name='rt' value='" . $u . "' style='display:none'>";

                            // echo "<input type='text' name='pt' value='" . $a . "' style='display:none'>";

                            $brand_query = "SELECT name,address,describes,rooms,handled,buyorrent,city,mobile from house";
                            $query_run = mysqli_query($conn, $brand_query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $brand) {
                                    $str =$brand['name'] . "-" . $brand['address']."-". $brand['describes'] . "-" . $brand['rooms']."-".$brand['handled'] . "-" . $brand['buyorrent']."-" .$brand['city'] . "-" . $brand['mobile'];
                            ?>
                                    <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br />
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }

                            // $nc = $_REQUEST['nc'];

                            // echo "<input type='text' name='n' value='" . $nc . "' style='display:none'>";


                            // echo $nc;


                            ?>

                            <!-- <div class="form-group mt-3">

                                <button name="submit" class="btn btn-primary">submit</button> <a href="admin_home.html" class="btn btn-primary">BACK</a>
                            </div>

                        </form>
                    </div>
                </div> -->



   




    <h3><b><label>Customer name</label></b></h3>
    <input type="text" name="custname" placeholder="Enter your name" required>
   
    <h3><b><label>custmobile</label></b></h3>
    <input type="text" name="custmobile" placeholder="Enter your mobile number" required>

<br>
<h3><b><label>Arrival</label></b></h3>
    <input type="radio" id="visit" name="arrival" value="visit">
    <label>Visit</label><br>
    <input type="radio" id="later" name="arrival" value="later">
    <label>later</label><br>

    <h3><b><label>Date</label></b></h3>
    <input type="date" name="d" placeholder="select the date" required>

    <h3><b><label>Time</label></b></h3>
    <input type="varchar" name="t" placeholder="enter the time" required>


    









                <div class="form-group mt-3">
                                <button name="submit" class="btn btn-primary"  >submit</button> <a href="c.html" class="btn btn-primary" >BACK</a>
                                                        </div>
                        </form>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

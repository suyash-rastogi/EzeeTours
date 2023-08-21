<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6322/6322766.png" type="image/x-icon">
    <title>DASHBOARD</title>
    <style>
        .left
        {
            background-color: black;
            color: white;
        }
        .left,.right
        {
            height:37.8rem;
        }
        .left a
        {
            text-decoration: none;
            color: white;
        }
        .left i
        {
            color: white;
        }
        .left div
        {
            margin: 10% 0%;
        }
        .left div:hover
        {
            font-weight: bolder;
        }
        .dhead
        {
            text-align: center;
            padding: 2%;
            background-image: linear-gradient(to bottom right,blue,white);
            font-size: xx-large;
            font-weight: bolder;
        }
        .card-header-mod
        {
            text-align: center;
            padding: 2%;
            background-image: linear-gradient(to bottom right,blue,white);
            font-size: x-large;
            font-weight: bolder;
            border-radius:5px;
        }
        .card-body
        {
            background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
            color:white;

        }
        .card-footer
        {
            background-color:black;
            color : white !important;
        }
        i
        {
            margin-right:3%;
        }
        .card
        {
            margin:2%;
        }
    </style>
</head>
<body> 
    <?php
        session_start();
        $id=$_SESSION["userid"];
        if(!$id)
        {
            header("location: admin.php");
        }

        include"connect.php";
        $rs=$con->query("select count(eno) as ecnt from enquiry where status='PENDING';");
        $row=$rs->fetch_assoc();
        $ecnt=$row["ecnt"];

        $rs=$con->query("select count(pno) as pcnt from package;");
        $row=$rs->fetch_assoc();
        $pcnt=$row["pcnt"];

        $rs=$con->query("select count(cno) as ccnt from category;");
        $row=$rs->fetch_assoc();
        $ccnt=$row["ccnt"];

        $rs=$con->query("select count(bno) as pbcnt from booking where status='PENDING';");
        $row=$rs->fetch_assoc();
        $pbcnt=$row["pbcnt"];

        $rs=$con->query("select count(bno) as cbcnt from booking where status='CONFIRMED';");
        $row=$rs->fetch_assoc();
        $cbcnt=$row["cbcnt"];

        $rs=$con->query("select sum(package.spl_price*booking.pax) as rcnt from booking natural join package where booking.status='CONFIRMED';");
        $row=$rs->fetch_assoc();
        $rcnt=$row["rcnt"];
    ?>
    <div class="container-fluid dhead">
        DASHBOARD
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 left">
                <div>
                    <a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>
                </div>
                <div>
                    <a href="admin_dashboard.php"><i class="fa-solid fa-gauge-high"></i>DASHBOARD</a>
                </div>
                <div>
                    <a href="manage_category.php"><i class="fa-solid fa-table-list"></i>CATEGORY MANAGEMENT</a>
                </div>
                <div>
                    <a href="manage_package.php"><i class="fa-solid fa-suitcase-rolling"></i>PACKAGE MANAGEMENT</a>
                </div>
                <div>
                    <a href="manage_booking.php"><i class="fa-solid fa-ticket"></i>BOOKING MANAGEMENT</a>
                </div>
                <div>
                    <a href="manage_enquiry.php"><i class="fa-solid fa-clipboard-question"></i>ENQUIRY MANAGEMENT</a>
                </div>
                <div>
                    <a href="newuser.php"><i class="fa-solid fa-plus"></i>CREATE NEW USER</a>
                </div>
                <div>
                    <a href="chgpw.php" class="chp"><i class="fa-solid fa-arrows-rotate"></i>CHANGE PASSWORD</a>
                </div>
                <div>
                    <a href="logout.php" class="lgt"><i class="fa-solid fa-power-off"></i>LOGOUT</a>
                </div>
            </div>
            <div class="col-sm-10 right">
                <h5>LOGGED IN AS : <?php echo"$id" ?> </h5>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header-mod">
                                AVAILABLE CATEGORIES
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"><?php echo"$ccnt"; ?></h1>
                                <a href="manage_categpry.php" class="btn btn-outline-light">MANAGE CATEGORIES</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                UPDATED : JUST NOW
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header-mod">
                                AVAILABLE PACKAGES
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"><?php echo"$pcnt"; ?></h1>
                                <a href="manage_package.php" class="btn btn-outline-light">MANAGE PACKAGES</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                UPDATED : JUST NOW
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header-mod">
                                PENDING ENQUIRIES
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"><?php echo"$ecnt"; ?></h1>
                                <a href="manage_enquiry.php" class="btn btn-outline-light">MANAGE ENQUIRIES</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                UPDATED : JUST NOW
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header-mod">
                                PENDING BOOKINGS
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"><?php echo"$pbcnt"; ?></h1>
                                <a href="manage_booking.php" class="btn btn-outline-light">MANAGE BOOKINGS</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                UPDATED : JUST NOW
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header-mod">
                                CONFIRMED BOOKINGS
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"><?php echo"$cbcnt"; ?></h1>
                                <a href="manage_booking.php" class="btn btn-outline-light">MANAGE BOOKING</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                UPDATED : JUST NOW
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header-mod">
                                TOTAL REVENUE
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"><?php echo"&#x20B9;$rcnt"; ?></h1>
                                <a href="manage_package.php" class="btn btn-outline-light">MANAGE PACKAGES</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                UPDATED : JUST NOW
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
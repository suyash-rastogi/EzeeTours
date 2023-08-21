<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://icon-library.com/images/inquiry-icon/inquiry-icon-23.jpg" type="image/x-icon">
    <title>ENQUIRY MANAGEMENT</title>
    <style>
        .left
        {
            background-color: black;
            color: white;
            height: 43rem;
        }
        .left,.right
        {
            height:37.8rem;
        }
        .scroll
        {
            overflow:auto;
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
        i
        {
            margin-right:3%;
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
    ?>
    <div class="container-fluid dhead">
        ENQUIRY MANAGEMENT
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
            <div class="col-sm-10 right scroll">
                <h5>LOGGED IN AS : <?php echo"$id" ?> </h5>
                <h6><u>PENDING ENQUIRIES</u></h6>
                <?php
                    include"connect.php";
                    $rs=$con->query("select eno,name,mob,email,msg,status,time from enquiry where status='PENDING';");
                    if(mysqli_num_rows($rs)>0)
                    {
                        echo"<table class='table'>
                            <thead class='table-dark sticky-top'>
                                <tr>
                                    <th scope='col'>ENO</th>
                                    <th scope='col'>NAME</th>
                                    <th scope='col'>MOBILE</th>
                                    <th scope='col'>EMAIL</th>
                                    <th scope='col'>MESSAGE</th>
                                    <th scope='col'>TIMESTAMP</th>
                                    <th scope='col'>STATUS</th>
                                    <th scope='col'>ACTION</th>

                                </tr>
                            </thead>";
                        while ($row = $rs->fetch_assoc())
                        {
                            $eno=$row["eno"];
                            $name = $row["name"];
                            $mob = $row["mob"];
                            $email = $row["email"];
                            $msg = $row["msg"];
                            $timestamp = strtotime($row["time"]);
                            $time = date("d-m-Y H:i:s", $timestamp);
                            $status = $row["status"];

                            echo"
                                <tbody>
                                    <tr>
                                        <th scope='row'>$eno</th>
                                        <td>$name</td>
                                        <td>$mob</td>
                                        <td>$email</td>
                                        <td>$msg</td>
                                        <td>$time</td>
                                        <td>$status</td>
                                        <td><a href='resolve.php?eno=$eno'><button type='button' class='btn btn-success'>RESOLVE</button></a></td>
                                    </tr>
                                </tbody>";
                        }    
                        echo"</table>";                   
                    }    
                    else
                    {
                        echo"<h5>NO PENDING QUERIES</h5>";
                    }                        
                ?>


                <h6><u>RESOLVED ENQUIRIES</u></h6>
                <?php
                    include"connect.php";
                    $rs=$con->query("select eno,name,mob,email,msg,status,time from enquiry where status='RESOLVED';");
                    if(mysqli_num_rows($rs)>0)
                    {
                        echo"<table class='table'>
                            <thead class='table-dark sticky-top'>
                                <tr>
                                    <th scope='col'>ENO</th>
                                    <th scope='col'>NAME</th>
                                    <th scope='col'>MOBILE</th>
                                    <th scope='col'>EMAIL</th>
                                    <th scope='col'>MESSAGE</th>
                                    <th scope='col'>TIMESTAMP</th>
                                    <th scope='col'>STATUS</th>
                                </tr>
                            </thead>";
                        while ($row = $rs->fetch_assoc())
                        {
                            $eno=$row["eno"];
                            $name = $row["name"];
                            $mob = $row["mob"];
                            $email = $row["email"];
                            $msg = $row["msg"];
                            $timestamp = strtotime($row["time"]);
                            $time = date("d-m-Y H:i:s", $timestamp);
                            $status = $row["status"];

                            echo"
                                <tbody>
                                    <tr>
                                        <th scope='row'>$eno</th>
                                        <td>$name</td>
                                        <td>$mob</td>
                                        <td>$email</td>
                                        <td>$msg</td>
                                        <td>$time</td>
                                        <td>$status</td>
                                    </tr>
                                </tbody>";
                        }    
                        echo"</table>";                        
                    }    
                    else
                    {
                        echo"<h5>NO RESOLVED QUERIES</h5>";
                    }                        
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>
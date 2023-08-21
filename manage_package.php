<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/223/45/png-transparent-computer-icons-briefcase-bag-luggage-rectangle-accessories-suitcase.png" type="image/x-icon">
    <title>PACKAGE MANAGEMENT</title>
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
            height:30rem;
        }
        .left a
        {
            text-decoration: none;
            color: white;
        }
        .left,.right
        {
            height:37.8rem;
        }
        .scroll
        {
            overflow:auto;
            height:30rem;
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
        PACKAGE MANAGEMENT
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
                <a href='add_package.php' ><button type='button' style="margin: 2% 0%" class='btn btn-primary'>ADD PACKAGE</button></a>
                <div class="scroll">
                    <?php
                        include"connect.php";
                        $rs=$con->query("select * from package;");
                        if(mysqli_num_rows($rs)>0)
                        {
                            echo"<div><table class='table'>
                                <thead class='table-dark sticky-top'>
                                    <tr>
                                        <th scope='col'>PNO</th>
                                        <th scope='col'>PACK. NAME</th>
                                        <th scope='col'>PACK. SHORT DEC.</th>
                                        <th scope='col'>PACKAGE DESCRIPTION</th>
                                        <th scope='col'>SOURCE</th>
                                        <th scope='col'>DESTINATION</th>
                                        <th scope='col'>DURATION</th>
                                        <th scope='col'>HOTEL NAME</th>
                                        <th scope='col'>HOTEL CAT.</th>
                                        <th scope='col'>PRICE</th>
                                        <th scope='col'>SPL. PRICE</th>
                                        <th scope='col'>IMAGE</th>
                                        <th scope='col'>ACTION</th>
                                    </tr>
                                </thead>";
                            while ($row = $rs->fetch_assoc())
                            {
                                $pno=$row["pno"];
                                $pname = $row["pname"];
                                $psdesc = $row["psdesc"];
                                $pdesc = $row["pdesc"];
                                $src = $row["src"];
                                $dest = $row["dest"];
                                $duration = $row["duration"];
                                $hname = $row["hname"];
                                $hcat = $row["hcat"];
                                $price = $row["price"];
                                $spl_price = $row["spl_price"];
                                $img_src = $row["img_src"];
                                echo"
                                    <tbody>
                                        <tr>
                                            <th scope='row'>$pno</th>
                                            <td>$pname</td>
                                            <td style='overflow: auto;'><div style='height:100px'>$psdesc</td>
                                            <td style='overflow: auto;'><div style='height:100px'>$pdesc</div></td>
                                            <td>$src</td>
                                            <td>$dest</td>
                                            <td>$duration</td>
                                            <td>$hname</td>
                                            <td>$hcat</td>
                                            <td>$price</td>
                                            <td>$spl_price</td>
                                            <td><img src='$img_src' height='100px' width='175px' alt='cat_img'></td>
                                            <td>
                                                <a href='update_package.php?pno=$pno'><button type='button' class='btn btn-success'>UPDATE</button></a>
                                                <a href='remove_package.php?pno=$pno'><button style='margin-top:5%' type='button' class='btn btn-danger'>REMOVE</button></a>
                                            </td>
                                        </tr>
                                    </tbody>";
                            }    
                            echo"</table></div>";                   
                        }    
                        else
                        {
                            echo"<h5>NO PACKAGES AVAILABLE</h5>";
                        }                        
                    ?>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>
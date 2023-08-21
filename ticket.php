<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <style>
    .bg-container
    {
        background-image: url("https://4kwallpapers.com/images/wallpapers/beach-aerial-view-2560x1440-60.jpg");
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin-bottom: 2%;
        padding: 0px;
    }
    .header
    {
        background-color: rgba(159, 223, 216, 0.941);
        font-size: larger;
    }
    .carousel-container
    {
        margin-top: 1%;
        
    }
    .carousel-inner
    {
        border-radius: 2rem;
        box-shadow: 1rem 1rem 2rem 1rem rgba(0, 200, 255, 0.331);
    }
    .carousel-container img
    {
        width: 100%;
        height: 100%;
    }
    .carousel-item
    {
        height: 100%;
    }
    .intro
    {
        text-align: center;
        margin: 1%;
    }
    /*category*/
    .category
    {
        margin-top: 0%;
        padding:1% 10%;
    }
    .cat-head   
    {
        text-decoration: underline;
        font-size: x-large;
        font-weight: bolder;
        text-align: center;
    }
    .cat-card
    {
        width: 75%;
        margin: auto;
        border: 2px solid rgb(137, 228, 226);
        border-radius: 10px;
        box-shadow: 3px 3px 10px 0.25px rgba(0, 200, 255, 0.331);
        padding: 2%;
        background-color: rgba(255, 255, 255, 0.751);
    }
    .cat-name
    {
        text-align: center;
        font-size: larger;
        font-weight: bold;
        text-decoration: underline;
    }
    .img-container
    {
        text-align: center;
        margin:2% ;
    }
    .cat-card img
    {
        height: 300px;
        width: 300px;
        border-radius:20%;
        margin: auto;
    }
    .desc
    {
        text-align: justify;
    }
    /* eqnuiry */
    .form-container
    {
        text-align: left;
        padding: 2% 25%;
    }
    .enquiry-head
    {
        font-size: x-large;
        font-weight: bolder;
        text-decoration: underline;
        text-align: center;
    }
    .form-container form label
    {
        margin: 1% 0%;
        font-weight: bold;
    }
    .form-container form .submit-btn
    {
        margin: 2% 0%;
    }

    .footer
    {
        background-color: black;
        margin-top: 5%;
    }
    .fleft
    {
        padding: 2%;
        color: white;
    }
    .fleft hr
    {
        border: 2.5px solid white;
        border-radius: 2rem;
        width: 25%;
    }
    .media
    {
        margin: 4% 0%;
    }

    .media a,.quick-links a
    {
        text-decoration: none;
        color: white;
    }
    .media a:hover,.quick-links a:hover
    {
        font-weight: bolder;
        transition: 0.25s;
    }
    .quick-links a:hover
    {
        font-weight: bolder;
        text-decoration: underline;
        transition: 0.25s;
    }
    .media span
    {
        margin-left : 2%;
    }
    
    @media print
    {
        button
        {
            display: none !important;
        }
        .category
        {
            padding:0%;
        }
        .cat-card
        {
            margin:auto;
            width:85%;
        }
        
    }
    </style>
    <title>EzeeTour</title>
</head>
<body>
    <div class="container-fluid bg-container" style="padding: 0;">
          <div class='container-fluid category'>
            <?php
              include"connect.php";
              $bno=$_GET["bno"];
              $rs=$con->query("select * from booking where bno=$bno;");
              if(mysqli_num_rows($rs)>0)
              {
                while ($row = $rs->fetch_assoc())
                {
                    $bno=$row["bno"];
                    $pno=$row["pno"];
                    $name = $row["name"];
                    $uid = $row["uid"];
                    $mob = $row["mob"];
                    $email = $row["email"];
                    $address = $row["address"];
                    $pax = $row["pax"];
                    $status = $row["status"];
                    $time = strtotime($row["time"]);
                    $time = date("d-m-Y H:i:s", $time);

                    $rs=$con->query("select * from package where pno=$pno");
                    $row1=$rs->fetch_assoc();

                    $pname=$row1["pname"];
                    $duration = $row1["duration"];
                    $src = $row1["src"];
                    $dest = $row1["dest"];
                    $hname=$row1["hname"];
                    $hcat=$row1["hcat"];
                    $price = $row1["price"];
                    $spl_price = $row1["spl_price"];
                    $eff_price=$spl_price*$pax;

                  echo"
                    <div class='cat-card' style='margin-top:1%'>
                      <p class='cat-name'>E-TICKET</p>
                      <hr>
                      <div style='text-align:center;'><img style='height:10rem' src='./icons/svg/logo-no-background.svg' alt='ezeetours'></div>
                      <div class='row'>
                        <div class='col-sm-12' class='desc'>
                          <h4><p><b>BOOKING NO : $bno</p></b></h4>
                          <h5><p><b>TIME OF BOOKING : $time</p></b></h5>
                          <p><b>PACKAGE NO</b> : $pno</p>
                          <p><b>PACKAGE NAME</b> : $pname ($duration)</p>
                          <p><b>SOURCE</b> : $src <b>------>DESTINATION</b> : $dest</p>
                          <p><b>HOTEL NAME</b> : $hname";
                            echo"(";
                            for($i=0;$i<$hcat;$i++)
                            {
                                echo"⭐";
                            }
                            echo")";
                          echo"
                          </p>
                          <p><b>NAME</b> : $name</p>
                          <p><b>UID</b> : $uid</p>
                          <p><b>MOBILE NO</b> : $mob</p>
                          <p><b>EMAIL</b> : $email</p>
                          <p><b>ADDRESS</b> : $address</p>
                          <p><b>NO OF PASSENGERS</b> : $pax</p>
                          <p><b>AMOUNT PAID</b> : &#x20B9;$eff_price/-</p>
                          <p><b>STATUS</b> : $status</p>
                          <br>
                          <div style='margin-left :2%; text-align:left;'><img style='height:8rem' src='https://png2.cleanpng.com/sh/b4738759d52eaa4041a8514b5dd90e44/L0KzQYm4UMI1N5ZAkpH0aYP2gLBuTf9zb5JzgdU2ZnBydH7qggJxbaUye95uYX7sfri0kQJwbKZojJ9qbHzogrjsjr1lcaR5ittsdD3ydn7qjBx2dZNueZ9vaYL2hH7zifJmeqVARadrZEG1RoW3UMU1bGE8RqY6NEe8SYG5UcU1OGU4S6YCMkC1QYi1kP5o/kisspng-organic-food-carpet-cleaning-product-allergen-district-of-columbia-first-liberty-5bd12640054d07.4147990215404334720217.png' alt='confirm'></div>
                          <div style='margin-top:1%; text-align:center;'>  
                            <a href='manage_booking.php' ><button type='button' style='' class='btn btn-primary'>GO BACK</button></a>
                            <button type='button' onclick='window.print()' style='' class='btn btn-success'>PRINT TICKET</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
                }
              }
              else
              {
                echo"<div style='text-align:center;margin:2%;'><h5>NO DETAILS AVAILABLE</h5></div>";
              }
            ?>
        </div>

        
    </div>
</body>
</html>
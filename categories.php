<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="icons/png/logo-white.png" type="image/x-icon">
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
        margin-top: 2%;
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
        opacity: 50%;
    }
    .cat-card:hover img
    {
        transition: 1s ease-in-out;
        opacity: 100%;
        transform: scale(1.1,1.1);
        border-radius: 100%;
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
    </style>
    <title>CATEGORY</title>
</head>
<body>
    <div class="container-fluid bg-container" style="padding: 0;">
          <div class="header container-fluid sticky-top" style="margin: 0px; padding: 0% 2%;">
              <nav class="navbar navbar-expand-lg ">
                  <div class="container-fluid" style="padding: 0px;">
                    <a style="margin-right:2%;" href="index.php"><img style="height:3rem; " src="./icons/svg/logo-no-background.svg" alt=""></a>
                    <a class="navbar-brand" href="index.php">EzeeTours</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav-ul-container" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="index.php#package">Packages</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./admin_dashboard.php">Admin Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="who.html">Who we are ?</a></li>
                            <li><a class="dropdown-item" href="about.html">About Company</a></li>
                            <li><a class="dropdown-item" href="#footer">Contact Us</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
          </div>

          <div class='container-fluid category'>
            <div style="text-align:center;"><img style="height:10rem" src="./icons/svg/logo-no-background.svg" alt=""></div>
            <?php
              include"connect.php";
              $cno=$_GET["cno"];
              $rs=$con->query("select * from category where cno=$cno;");
              if(mysqli_num_rows($rs)>0)
              {
                while ($row = $rs->fetch_assoc())
                {
                  $cno=$row["cno"];
                  $cname = $row["cname"];
                  $csdesc = $row["csdesc"];
                  $cdesc = $row["cdesc"];
                  $img_src = $row["img_src"];

                  echo"
                    <div class='cat-card' style='margin-top:1%'>
                      <p class='cat-name'>$cname</p>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-12 img-container'>
                          <img style='margin: 2%'; src='$img_src' alt='cat_img'>
                        </div>
                        <div class='col-sm-12' class='desc'>
                          <p style='text-align:center'>$csdesc</p>
                        </div>
                      </div>
                    </div>
                  ";
                }
              }
              else
              {
                echo"<div style='text-align:center;margin:2%;'><h5>NO TOUR CATEGORIES AVAILABLE</h5></div>";
              }
            ?>
        </div>

        <div id="footer" class="footer container-fluid">
          <div class="row">
            <div class="col-lg-4 fleft">
              <h3>CONTACT US</h3>
              <hr>
              <p><i class="fa-solid fa-location-dot"></i> ADRRESS : </p>              
              <p>Marathon Futurex, A Wing, 11Th & 13th Floor, N.M. Joshi Marg, Lower parel (E), Mumbai 400013</p>
              <p><i class="fa-solid fa-mobile-button"></i></i> Mobile No : +91 5698541235</p>          
              <p><i class="fa-solid fa-envelope"></i> Email : <a style="color: white; text-decoration: none; " href="mailto:sales@ezeetour.com">sales@ezeetour.com</a></p>
            </div>
            <div class="col-lg-4 fleft">
              <h3>CONNECT WITH US</h3>
              <hr>
              <div class="media">
                <a href="facebook.com"><i class="fa-brands fa-2x fa-instagram"></i><span>INSTAGRAM</span></a>
              </div>
              <div class="media">
                <a href="instagram.com"><i class="fa-brands fa-2x fa-facebook"></i><span>FACEBOOK</span></a>
              </div>
              <div class="media">
                <a href="google.com"><i class="fa-brands fa-2x fa-google-plus-g"></i><span>GOOGLE +</span></a>
              </div>
              <div class="media">
                <a href="pinterest.com"><i class="fa-brands fa-2x fa-pinterest"></i><span>PINTEREST</span></a>
              </div>

            </div>
            <div class="col-lg-4 fleft quick-links">
              <h3>QUICK LINKS</h3>
              <hr>
              <p><a href="index.php">HOME</a></p>              
              <p><a href="index.php#package">PACKAGES</a></p>              
              <p><a href="index.php#category">CATEGORIES</a></p>
              <p><a href="index.php#enquiry">ENQUIRY</a></p>
              <p><a href="admin.php">ADMIN DASHBOARD</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="icons/png/logo-white.png" type="image/x-icon">
    <title>EzeeTour</title>
</head>
<body>
  <script>
    function sucess()
    {
      alert("We recieved your enquiry.  THANK YOU!!!")
    }
  </script>


    <?php
      include"connect.php";
    ?>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#package">Packages</a>
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

        <div class="intro">
          <div><img style="height:10rem" src="./icons/svg/logo-no-background.svg" alt=""></div>
          <h1>Welcome to Your Travel Adventure</h1>
          <p>Explore the world with our curated travel experiences</p>
        </div>

        <div class="container carousel-container" style="width: 50rem; height: 30rem; padding: 0%;">
          <div id="carouselExampleFade" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel" >
            <div class="carousel-inner" style="width: 50rem; height: 30rem; padding: 0%;">
              <div class="carousel-item active">
                <img src="https://c4.wallpaperflare.com/wallpaper/878/961/175/nature-landscape-beach-tropical-wallpaper-preview.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/wp6705749.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/416676/pexels-photo-416676.jpeg?cs=srgb&dl=pexels-pixabay-416676.jpg&fm=jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div id="category" class='container-fluid category'>
          <p class='cat-head'>TOUR CATEGORIES</p>
          <?php
            $rs=$con->query("select * from category;");
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
                      <div class='col-sm-4 img-container'>
                        <img src='$img_src' alt='cat_img'>
                      </div>
                      <div class='col-sm-8' class='desc'>
                        <p>$csdesc</p>
                        <a href='./categories.php?cno=$cno'><button type='button' class='btn btn-outline-primary'>READ MORE</button></a>
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
        
        <div id="package" class="container-fluid category">
          <p class="cat-head">TOUR PACKAGES</p>
          <?php
            $rs=$con->query("select * from package;");
            if(mysqli_num_rows($rs)>0)
            {
              while ($row = $rs->fetch_assoc())
              {
                $pno=$row["pno"];
                $pname = $row["pname"];
                $psdesc = $row["psdesc"];
                $duration = $row["duration"];
                $src = $row["src"];
                $dest = $row["dest"];
                $price = $row["price"];
                $spl_price = $row["spl_price"];
                $img_src = $row["img_src"];

                echo"
                <div class='cat-card' style='margin-top:1%'>
                  <p class='cat-name'>$pname</p>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-12 img-container'>
                      <img style='margin: 2%;' src='$img_src' alt='pack_img'>
                    </div>
                    <div class='col-sm-12' class='desc'>
                      <div><p><b>DURATION : </b>$duration</p></div>
                      <div><p><b>SOURCE : </b>$src</p></div>
                      <div><p><b>DESTINATION : </b>$dest</p></div>
                      <div><p><b>DESCRIPTION : </b>$psdesc</p></div>
                      <div><p><b>PRICE : </b>&#x20B9;<strike>$price</strike>/pax</p></div>
                      <div><p><b>SPECIAL PRICE : </b>&#x20B9;$spl_price/pax</p></div>
                      <div style='text-align: right;'><a href='./packages.php?pno=$pno'><button type='button' class='btn btn-outline-primary'>MORE DETAILS</button></a></div>
                    </div>
                  </div>
                </div>
                ";
              }
            }
            else
            {
              echo"<div style='text-align:center;margin:2%;'><h5>NO TOUR PACKAGES AVAILABLE</h5></div>";
            }
          ?>
          
        </div>
    </div>
           
    <div id="enquiry" class="conatiner-fluid form-container">
      <p class="enquiry-head">ENQUIRY FORM</p>
      <form method="post" action="enquiry.php" onsubmit="return sucess();">
        <div class="form-group">
          <label for="exampleFormControlInput1">NAME</label>
          <input required type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name...">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">MOBILE NO</label>
          <input required type="text" name="mob" class="form-control" id="exampleFormControlInput1" placeholder="Enter Mobile No.">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input required type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">MESSAGE</label>
          <textarea required name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-outline-primary submit-btn" type="submit" >Submit form</button>
      </form>
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
          <p><a href="#package">PACKAGES</a></p>              
          <p><a href="#category">CATEGORIES</a></p>
          <p><a href="#enquiry">ENQUIRY</a></p>
          <p><a href="admin.php">ADMIN DASHBOARD</a></p>
        </div>
      </div>
    </div>
</body>
</html>
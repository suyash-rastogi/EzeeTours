<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <style>
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
    </style>
    <title>UPDATE PACKAGE</title>
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
    <?php
        include"connect.php";
        $pno=$_GET["pno"];
        $rs=$con->query("select * from package where pno='$pno';");
        $row = $rs->fetch_assoc();
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
        $img_src=$row["img_src"];
    ?>
    <div class="conatiner-fluid form-container">
        <p class="enquiry-head">UPDATE PACKAGE</p>
        <form method="post" action="update_package_php.php?pno=<?php echo"$pno"; ?>&img_src=<?php echo"$img_src"; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">PACKAGE NAME</label>
                <input value="<?php echo"$pname"; ?>" required type="text" name="pname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Package Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SHORT DESCRIPTION</label>
                <input value="<?php echo"$psdesc"; ?>" required type="text" name="psdesc" class="form-control" id="exampleFormControlInput1" placeholder="Enter Short Description">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                <textarea required name="pdesc" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo"$pdesc"; ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SOURCE</label>
                <input value="<?php echo"$src"; ?>" required type="text" name="src" class="form-control" id="exampleFormControlInput1" placeholder="Enter Source">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">DESTINATION</label>
                <input value="<?php echo"$dest"; ?>" required type="text" name="dest" class="form-control" id="exampleFormControlInput1" placeholder="Enter Destination">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">DURATION</label>
                <input value="<?php echo"$duration"; ?>" required type="text" name="duration" class="form-control" id="exampleFormControlInput1" placeholder="Enter Duration (e.g. 7N/8D)">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">HOTEL NAME</label>
                <input value="<?php echo"$hname"; ?>" required type="text" name="hname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Hotel Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">HOTEL CATEGORY</label>
                <input value="<?php echo"$hcat"; ?>" required type="number" name="hcat" class="form-control" id="exampleFormControlInput1" placeholder="Enter Hotel Category">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">PRICE</label>
                <input value="<?php echo"$price"; ?>" required type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SPECIAL PRICE</label>
                <input value="<?php echo"$spl_price"; ?>" required type="number" name="spl_price" class="form-control" id="exampleFormControlInput1" placeholder="Enter Special Price">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">UPLOAD IMAGE</label>
                <br>
                <img style="margin: 0% 0% 2% 0%" src="<?php echo"$img_src" ?>" height='100px' alt='pack_img'>
                <input class="form-control" type="file" name="img_file" id="formFile">
            </div>
            <a href='manage_package.php' ><button type='button' style="margin: 2% 0%" class='btn btn-primary'>GO BACK</button></a>
            <button class="btn btn-outline-primary submit-btn" type="submit" name="update_pack" >UPDATE PACKAGE</button>
        </form>
    </div>
    
</body>
</html>
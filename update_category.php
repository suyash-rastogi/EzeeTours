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
    <title>Document</title>
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
        $cno=$_GET["cno"];
        $rs=$con->query("select * from category where cno='$cno';");
        $row = $rs->fetch_assoc();
        $cname = $row["cname"];
        $csdesc = $row["csdesc"];
        $cdesc = $row["cdesc"];
        $img_src = $row["img_src"];
    ?>
    <div class="conatiner-fluid form-container">
        <p class="enquiry-head">UPDATE CATEGORY</p>
        <form method="post" action="update_category_php.php?cno=<?php echo"$cno"; ?>&img_src=<?php echo"$img_src"; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">CATEGORY NAME</label>
                <input autocomplete="off" value="<?php echo"$cname" ?>" required type="text" name="cname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Category Name...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SHORT DESCRIPTION</label>
                <input autocomplete="off" value="<?php echo"$csdesc" ?>" required type="text" name="csdesc" class="form-control" id="exampleFormControlInput1" placeholder="Enter Short Description">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                <textarea autocomplete="off" required name="cdesc" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo"$cdesc" ?></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">UPLOAD IMAGE</label>
                <br>
                <img style="margin: 0% 0% 2% 0%" src="<?php echo"$img_src" ?>" height='100px' alt='cat_img'>
                <input class="form-control" type="file" name="img_file" id="formFile">
            </div>
            <a href='manage_category.php' ><button type='button' style="margin: 2% 0%" class='btn btn-primary'>GO BACK</button></a>
            <button class="btn btn-outline-primary submit-btn" type="submit" name="update_cat" >UPDATE CATEGORY</button>
        </form>
    </div>
    
</body>
</html>
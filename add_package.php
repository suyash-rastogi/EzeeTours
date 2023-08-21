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
    <title>ADD PACKAGE</title>
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
    
    <div class="conatiner-fluid form-container">
        <p class="enquiry-head">ADD PACKAGE</p>
        <form method="post" action="add_package_php.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">PACKAGE NAME</label>
                <input required type="text" name="pname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Package Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SHORT DESCRIPTION</label>
                <input required type="text" name="psdesc" class="form-control" id="exampleFormControlInput1" placeholder="Enter Short Description">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                <textarea required name="pdesc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SOURCE</label>
                <input required type="text" name="src" class="form-control" id="exampleFormControlInput1" placeholder="Enter Source">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">DESTINATION</label>
                <input required type="text" name="dest" class="form-control" id="exampleFormControlInput1" placeholder="Enter Destination">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">DURATION</label>
                <input required type="text" name="duration" class="form-control" id="exampleFormControlInput1" placeholder="Enter Duration (e.g. 7N/8D)">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">HOTEL NAME</label>
                <input required type="text" name="hname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Hotel Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">HOTEL CATEGORY</label>
                <input required type="number" name="hcat" class="form-control" id="exampleFormControlInput1" placeholder="Enter Hotel Category">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">PRICE</label>
                <input required type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">SPECIAL PRICE</label>
                <input required type="number" name="spl_price" class="form-control" id="exampleFormControlInput1" placeholder="Enter Special Price">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">UPLOAD IMAGE</label>
                <input required class="form-control" type="file" name="img_file" id="formFile">
            </div>
            <a href='manage_package.php' ><button type='button' style="margin: 2% 0%" class='btn btn-primary'>GO BACK</button></a>
            <button class="btn btn-outline-primary submit-btn" type="submit" name="add_pack" >ADD PACKAGE</button>
        </form>
    </div>
    
</body>
</html>
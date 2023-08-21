<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6195/6195699.png" type="image/x-icon">
    <style>
        html
        {
            width: 100%;
            height: 100%;
        }
        body
        {
            padding:0px;
            margin: 0;
        }
        .bg
        {
            background-image: linear-gradient(to bottom right,rgb(0, 0, 255),white);
            background-size: cover;
            width: 100%;
            height: 45rem;

        }
        .form
        {
            margin:auto;
            border: 2px solid rgb(185, 176, 176);
            border-radius: 5px;
            width: 40%;
            position: relative;
            top:25%;
            padding: 2%;
            text-align: center;

            background-color: rgba(87, 78, 222, 0.461);

        }
        .inp-input
        {
            width: 50%;
            height: 1.5rem;
            border-radius: 5px;
            margin:1rem 0rem;
            padding: 1%;

        }
        .admin-span
        {
            text-align: center;
            color: white;
            font-size: larger;
            font-weight: bolder;
        }
        .inp-submit
        {
            margin-top: 2%;
            margin-bottom: 1%;
            padding: 1%;
            width: 7.5rem;
            border-radius: 5px;
            background-color:blue;
            color: white;
            font-weight: bold;
            font-size: large;
            text-align: center;
            cursor: pointer;
        }
        .inp-submit:hover
        {
            background-color:blue;
            color: black;
            transition: 1s;
        }
    </style>
    <title>CHANGE PASSWORD</title>
</head>
<body>
<div class="container-fluid bg">
        <div class="form">
            <p class="admin-span" >CHANGE PASSWORD</p>
            <hr>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label>NEW PASSWORD</label>
                <br>
                <input class="inp-input" type="text" name="new" placeholder="NEW PASSWORD" required autocomplete="off">
                <br>
                <label>CONFIRM PASSWORD</label>
                <br>
                <input class="inp-input" type="text" name="new_confirm" placeholder="CONFIRM PASSWORD" required autocomplete="off">
                <br>
                <input class="inp-submit" type="submit" name="chgpw" value="SUBMIT">
            </form>
            <a href="admin_dashboard.php"><i style="margin-right:3%;" class="fa-solid fa-arrow-left"></i>GO BACK TO DASHBOARD</a>
        </div>
    </div>
    
    <?php
        session_start();
        $id=$_SESSION["userid"];
        if($id==true)
        {
            include"connect.php";
            if(isset($_POST["chgpw"]))
            {
                $npw=$_POST["new"];
                $npw_cnf=$_POST["new_confirm"];
                if($npw_cnf != $npw)
                {
                    echo"please enter same password";
                }
                else
                {
                    $con->query("update detail set pw='$npw' where uid='$id'");
                    header("location: logout.php");
                }
            }
        }
        else
        {
            header("location: admin.php");
        }
    ?>
</body>
</html>
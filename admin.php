<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2676538428.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" type="image/x-icon">
    
    <title>ADMIN LOGIN</title>
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
</head>
<body>
    <div class="container-fluid bg">
        <div class="form">
            <p class="admin-span" >ADMIN LOGIN</p>
            <hr>
            <form action="login.php" method="post">
                <label>USER ID</label>
                <br>
                <input class="inp-input" type="text" name="id" placeholder="USER ID" required autocomplete="off">
                <br>
                <label>PASSWORD</label>
                <br>
                <input class="inp-input" type="text" name="password" placeholder="PASSWORD" required autocomplete="off">
                <br>
                <input class="inp-submit" type="submit" name="login" value="SUBMIT">
            </form>
            <a href="index.php"><i style="margin-right:3%;" class="fa-solid fa-arrow-left"></i>GO BACK TO HOME</a>
        </div>
    </div>
    
</body>
</html>
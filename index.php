<?php
    require_once 'include/config.php';
    require_once 'include/session.php';
    require_once 'Login/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: "Times New Roman", Times, serif;
            background-color: #454545;
            margin: 0;
            display: flex;
            justify-content: center;
            text-align: center;
            height: 100vh;
        }
        .outer-container{
            background: URL("image/3d.png");
            width: 100%;
            height: 100vh; 
            background-size: cover; 
            background-position: center; 
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
        .inner-container {
            width: 600px;
            height: 450px; 
            background-color: rgba(0, 0, 0, 0.50); 
            text-align: center;
            padding: 10px;
            font-size: 30px;
            border-radius: 20px;
            box-shadow: 50px 50px 10px 0px rgba(30, 30, 30, 100);
            display: flex;  
            flex-direction: column; 
            justify-content: center;  
            align-items: center; 
        }

        .inner-container form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .inner-container form li {
            list-style-type: none;
        }

        .inner-container form li input {
            height: 60px;
            width: 300px;
            border-radius: 20px;
            border-width: 4px;
            border-style: solid;
            border-color: rgb(0, 0, 0);
            background-color: rgba(100, 100, 100, 0.5);
            box-shadow: 5px 5px 10px 0px rgba(200, 200, 200, 100);
            font-size: 20px;
            color: rgb(180, 180, 180);
            font-weight: ;
            padding: 0 10px;
            margin: auto;
        }
        .inner-container form li input::placeholder{
            color: rgb(180, 180, 180);
            padding: 0 10px;
        }

        button {
            height: 50px;
            width: 300px;
            cursor: pointer;
            border-radius: 10px;
            border-width: 4px;
            border-color: rgb(0, 0, 0);
            border-style: solid;
            background-color: rgb(0, 0, 0);    
            box-shadow: 5px 5px 10px 0px rgba(200, 200, 200, 100);
            color: white;
            font-weight: bold;
            font-size: 20px;
            margin-top: 10px; 
            margin: auto;
            transition: 0.5s;
        }

        button:hover {
            height: 60px;
            width: 310px;
        }
        button:active {
            opacity: 0.5;
        }

        a{
            display: block;  
            margin-top: 20px;  
            color: white;
            text-decoration: none;
            font-size: 30px;
            font-weight: ;
            transition: 0.5s;
        }
        a:hover{
            font-size: 40px;
            font-weight: bold;
            box-shadow: 5px 5px 10px 0px rgba(200, 200, 200, 100);
        }
        p {
            position: relative;
            bottom: -40px; 
            color: red;
            font-size: 20px;
            text-align: center;
            width: 100%; 
            margin-top: -50px;
            padding: 10px;
        }
        .icon {
            position: absolute; 
            top: -50px; 
            left: 50%;  
            transform: translateX(-50%); 
        }
        .icon img {
            width: 150px;  
            height: auto; 
        }
    </style>
    <link rel="manifest" href="manifest.json">
</head>
<body>
    <div class="outer-container">
        <div class="inner-container" style="position: relative;">
            <div class="icon">
                <img src="image/logo.png" alt="">
            </div>
            <?php
            if(!isset($_SESSION["user_id"])){ ?>
            <form action="Login/login.php" method="post">
                <li><input type="text" name="username" placeholder="Username:"></li>
                <li><input type="password" name="password" placeholder="Password:"></li>
                <button class="login-button">Login</button>
            </form>
            <?php } ?>
                <p><?php
                    login_errors();
                ?></p>
        </div>
    </div>
        <script src="main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hello member</h1>
    <h2>
        <?php
        if(isset($_SESSION["user_username"])){
            $username = $_SESSION["user_username"];
            echo $username;
        }

        ?>
    </h2>
    <a href="../logout.php"><button>logout</button></a>
</body>
</html>
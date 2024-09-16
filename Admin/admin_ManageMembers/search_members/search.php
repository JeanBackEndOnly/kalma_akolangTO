<?php

require_once "../../../include/config.php";
require_once "../../../include/session.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $search = intval($_POST["search"]);

    try {
        
        $query = "SELECT * FROM members WHERE member_id = :search;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":search", $search);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        
    } catch (PDOException $e) {
        die("query Failed: " . $e->getMessage());
    }
}else{
    header("Location: ../manage_members.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/search.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php
        if(empty($result)) {
            echo '<div class="no-result">';
                echo '<p>No result found.</p>';
                echo '<a href="../manage_members.php"><button class="back-button"><img src="back.jpg"></button></a>';
            echo '</div>';
            
        } else {
            foreach($result as $row){ ?>
            <div class="container">
                <div class="inner-container">
                    
                    <div class="banner-container">
                        <img class="banner-img" src="../../../image/banner.png">
                        <div class="logo-container">
                            <img class="logo-img" src="../../../image/logo.png">
                        </div>
                    </div>
                    
                    <div class="button-container">
                        <a href="../manage_members.php"><button class="back-button"><img src="../../../image/backening.png"></button></a>
                    </div>  
                    <ul class="st-infoList">
                        <li>Full Name: <?php echo '<p>'.$row["fullName"].'</p>' ?></li>
                        <li id="email">Email: <?php echo '<p>'.$row["email"].'</p>' ?></li>
                        <li id="address">Address: <?php echo '<p>'.$row["address"].'</p>' ?></li>
                        <li id="phone">Phone #: <?php echo '<p>'.$row["phone_no"].'</p>' ?></li>
                    </ul>
                        <div >
                            <ul class="nd-infoList">
                                <li id="gender">Gender: <?php echo '<p>'.$row["gender"].'</p>' ?></li>
                                <li id="age">Age: <?php echo '<p>'.$row["age"].'</p>' ?></li>   
                            </ul>
                        </div>    
                    </div>
                        <div class="button-icons">
                            <form action="">
                            <button><img src="../../../image/contractIcon.png" alt=""></button>
                            </form>
                            <form action="">
                            <button><img src="../../../image/editIcon.png" alt=""></button>
                            </form>
                            
                            
                        </div>
                </div>
           <?php 
           }
        }
    ?>
</body>
</html>

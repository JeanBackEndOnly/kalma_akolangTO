<?php
    require_once '../../include/session.php';
    require_once '../../include/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" type="text/css" href="../css/members.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="header">
        <div class="title">
            <h1 class="h1-membership">MEMBERSHIP MANAGEMENT</h1>
        </div>
        <div class="search-form">
            <form action="search_members/search.php" method="post">
                <li><input type="text" name="search" placeholder="Search Name:">
                <button class="search-button"><img src="../../image/search.png"></button></li>
            </form>
            <a href="add_Members/register.php"><button class="add-button"><img src="../../image/addCustomer.png"></button></a>
        </div>
        <div class="table table-bordered table-striped">
        
                <?php 
                    $sql = "SELECT * FROM members";
                    if($result = $pdo->query($sql)){
                        if($result->rowCount() > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo '<thead class="header-th">';
                                    echo '<tr class="header-tr">';
                                        echo "<th>#</th>";
                                        echo "<th>FULL NAME</th>";
                                        echo "<th>EMAIL</th>";
                                        echo "<th>ADDRESS</th>";
                                        echo "<th>PHONE #</th>";
                                        echo "<th>GENDER</th>";
                                        echo "<th>AGE</th>";
                                    echo "</tr>";   
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch()){
                                    echo "<tr>";
                                            echo "<td>" . $row['member_id'] . "</td>";
                                            echo "<td>" . $row['fullName'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
                                            echo "<td>" . $row['phone_no'] . "</td>";
                                            echo "<td>" . $row['gender'] . "</td>";
                                            echo "<td>" . $row['age'] . "</td>";
                                            echo "</td>";
                                        echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            unset($stmt);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                     ?>
        </div>
        <div class="side-nav">
            <div class="user">
            <img src="../../image/logo.png" class="user-img">
                <div>
                    <img src="../../image/logo.png" class="user-inside-img">
                    <p>
                        <?php
                            if(isset($_SESSION["user_username"])){
                                $username = $_SESSION["user_username"];
                                echo $username;
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="navs-div">
                <ul>
                    <a href="../admin_dashboard/dashboard.php"><li id="dashboard-li"><img src="../../image/dashboard.jpg" class="dashboard-img"><p>DASHBOARD</p></li></a>
                    <a href=""><li id="members-li"><img src="../../image/members.png" class="members-img"><p>MANAGE MEMBERS</p></li></a>
                </ul>
                </div>
            <ul>
                <a href="../logout.php"><li id="logout-li"><img src="../../image/logout.png" class="logout-img"><p>LOGOUT</p></li></a>
            </ul>
        </div>
    </div>
</body>
</html>
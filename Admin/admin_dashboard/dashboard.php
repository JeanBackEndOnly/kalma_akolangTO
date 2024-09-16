<?php
    require_once '../../include/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="header">
        <div class="title">
            <h1>DASHBOARD</h1>
        </div>
        <div class="date">
            <?php
                // date
                // 'd' = day(09)
                // 'l' = day(monday) 
                // 'm' = month(09) 
                // 'Y' = full year(2024)
                // 'F' = full month(september)
                echo '<p>' . date('l') . '</p>';
                echo '<p>' . date('d/m/Y') . '</p>';
            ?>
        </div>
        <div class="side-nav">
            <div class="user">
            <img src="../../image/logo.png" class="user-img">
                <div>
                    <img src="../../image/logo.png" class="user-inside-img">
                    <h1 class="admin">
                        <?php
                            if(isset($_SESSION["user_username"])){
                                $username = $_SESSION["user_username"];
                                echo $username;
                            }
                        ?>
                    </h1>
                </div>
            </div>
            <div class="navs-div">
                <ul>
                    <a href=""><li id="dashboard-li"><img src="../../image/dashboard.jpg" class="dashboard-img"><p>DASHBOARD</p></li></a>
                    <a href="../admin_ManageMembers/manage_members.php"><li id="members-li"><img src="../../image/members.png" class="members-img"><p>MANAGE MEMBERS</p></li></a>
                </ul>
                </div>
            <ul>
                <a href="../logout.php"><li id="logout-li"><img src="../../image/logout.png" class="logout-img"><p>LOGOUT</p></li></a>
            </ul>
        </div>
    </div>
</body>
</html>
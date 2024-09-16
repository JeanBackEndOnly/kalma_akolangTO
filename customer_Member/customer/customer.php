<?php
    require_once '../../include/config.php';
    require_once '../../include/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" type="text/css" href="../css/customer.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="header">
        <div class="title">
            <h1>DASHBOARD</h1>
        </div>
        <div class="side-nav">
            <div class="user">
            <img src="../../image/logo.png" class="user-img">
                <div>
                    <img src="../../image/logo.png" class="user-inside-img">
                    <h1><?php
                        if(isset($_SESSION["user_username"])){
                            $username = $_SESSION["user_username"];
                            echo $username;
                        }
                    ?></h1>
                </div>
            </div>
            <div class="navs-div">
                <ul>
                    <a href="customer.php"><li id="dashboard-li"><img src="../../image/dashboard.jpg" class="dashboard-img"><p>DASHBOARD</p></li></a>
                    <a href="manageMembers.php"><li id="members-li"><img src="../../image/members.png" class="members-img"><p>MANAGE MEMBERS</p></li></a>
                    <a href=""><li id="contract-li"><img src="../../image/contract.png" class="contract-img"><p>CONTRACT</p></li></a>
                </ul>
                </div>
            <ul>
                <a href="../logout.php"><li id="logout-li"><img src="../../image/logout.png" class="logout-img"><p>LOGOUT</p></li></a>
            </ul>
        </div>
    </div>
</body>
</html>
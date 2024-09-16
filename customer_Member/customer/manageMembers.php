<?php
    require_once '../../include/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <style>
        body{
            margin: 0;
            height: 100vh;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }
        .header{
            width: 100%;
            height: 100%;
            background: URL("../../image/final.png");
            background-position: center;
            background-size: cover;
        }
        h1{
            color: white;
        }
        .side-nav{
            width: 130px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding: 30px 15px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            transition: width 0.5s;
        }
        .user{
            display: flex;
            margin: auto;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            border-radius: 8px;
            margin-left: auto;
            margin-right: auto;
            overflow: block;
            
        }
        .user div{
            display: none;
        }
        .user h1{
            font-size: 15px;
            font-weight: 600;
            white-space: nowrap;
        }
        .user-img{
            width: 100px;
            align-items: center;
            justify-content: center;
        }
        ul{
            list-style: none;
        }
        ul li{
            margin: 30px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 20px;
        }
        ul li img{
            width: 50px;
            margin-right: 0px;
            margin-left: -20px;
        }
        ul li p{
            white-space: nowrap;
            display: none;
            color: white;
            font-size: 15px;
        }
        #dashboard-li, #members-li, #contract-li, #logout-li{
            padding: 20px 50px;
            font-weight: bold;
            margin-left: -20px;
            margin-right: -15px;
            transition: 0.5s;
        }
        #dashboard-li a{
            margin-top: 0px;
            margin-left: 40px;
        }
        #dashboard-li a p{
            margin-top: -40px;
            margin-left: 40px;
        }
        .side-nav:hover{
            width: 250px;
        }
        .side-nav:hover .user div{
            display: block;
        }
        .side-nav:hover .user{
            width: 100%;
            margin-left: -10px;
            padding: 10px 20px;
        }
        .side-nav:hover .user .user-img{
            display: none;
        }
        .side-nav:hover .user .user-inside-img{
            width: 100px;
            margin-top: -30px;
            margin-left: 40px;
            display: flex;
        }
        .side-nav:hover ul li p{
            display: block;
        }
        .side-nav:hover ul li img{
            margin-right: 10px;
        }
        .side-nav:hover ul li{
            justify-content: flex-start;
        }
        #dashboard-li:hover{
            background-color: rgba(0, 0, 0, 0.75);
            padding: 20px 60px;
            font-weight: bold;
            margin-left: 0px;
            margin-right: -40px;
            font-size: 20px;
        }
        #members-li:hover{
            background-color: rgba(0, 0, 0, 0.75);
            padding: 20px 60px;
            font-weight: bold;
            margin-left: 0px;
            margin-right: -40px;
            font-size: 20px;
        }
        #contract-li:hover{
            background-color: rgba(0, 0, 0, 0.75);
            padding: 20px 60px;
            font-weight: bold;
            margin-left: 0px;
            margin-right: -40px;
            font-size: 20px;
        }
        #logout-li:hover{
            background-color: rgba(0, 0, 0, 0.75);
            padding: 20px 60px;
            font-weight: bold;
            margin-left: 0px;
            margin-right: -40px;
            font-size: 20px;
        }
        #dashboard-li:active{
            opacity: 0.10;
        }
        #members-li:active{
            opacity: 0.10;
        }
        #contract-li:active{
            opacity: 0.10;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="side-nav">
            <div class="user">
            <img src="../../image/logo.png" class="user-img">
                <div>
                    <img src="../../image/logo.png" class="user-inside-img">
                    <h1>members</h1>
                </div>
            </div>
            <div class="navs-div">
                <ul>
                    <a href="customer.php"><li id="dashboard-li"><img src="../../image/dashboard.jpg" class="dashboard-img"><p>DASHBOARD</p></li></a>
                    <li id="members-li"><img src="../../image/members.png" class="members-img"><p>MANAGE MEMBERS</p></li>
                    <li id="contract-li"><img src="../../image/contract.png" class="contract-img"><p>CONTRACT</p></li>
                </ul>
                </div>
            <ul>
                <li id="logout-li"><img src="../../image/logout.png" class="logout-img"><p>LOGOUT</p></li>
            </ul>
        </div>
    </div>
    <div class="title">

    </div>
</body>
</html>
<?php
    require_once '../../../include/config.php';
    require_once '../../../include/session.php';
    require_once 'add_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="../../css/add.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="outer-container">
        <div class="inner-container" style="position: relative;">
            <div class="icon">
                <img src="image/logo.png" alt="">
            </div>
            <form action="add.php" method="post">
                <?php user_inputs(); ?>
            </form>
            <div class="error-success">
                    <p><?php signup_errors(); ?></p>
                </div>
            <a class="a-back" href="../manage_members.php">BACK</a>
            
        </div>
    </div>
</body>
</html>
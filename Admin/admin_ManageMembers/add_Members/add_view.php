<?php

declare(strict_types=1);

function user_inputs() {
    echo "<div class='form-columns'>";
    echo "<div class='column-two'>";

    if (isset($_SESSION["user_signup"]["fullName"]) && isset($_SESSION["errors_signup"])) {
        echo '<li><input type="text" name="fullName" placeholder="Full Name:" value = "' . $_SESSION["user_signup"]["fullName"] . '"></li>';
    } else {
        echo '<li><input type="text" name="fullName" placeholder="Full Name:"></li>';
    }

    if (isset($_SESSION["user_signup"]["address"]) && isset($_SESSION["errors_signup"])) {
        echo '<li><input type="text" name="address" placeholder="Address:" value = "' . $_SESSION["user_signup"]["address"] . '"></li>';
    } else {
        echo '<li><input type="text" name="address" placeholder="Address:"></li>';
    }

    if (isset($_SESSION["user_signup"]["phone_no"]) && isset($_SESSION["errors_signup"])) {
        echo '<li><input type="tel" name="phone_no" placeholder="Phone No:" value = "' . $_SESSION["user_signup"]["phone_no"] . '"></li>';
    } else {
        echo '<li><input type="tel" name="phone_no" placeholder="Phone No:"></li>';
    }

    if (isset($_SESSION["user_signup"]["gender"]) && isset($_SESSION["errors_signup"])) {
        echo '<li><input type="text" name="gender" placeholder="Gender:" value = "' . $_SESSION["user_signup"]["gender"] . '"></li>';
    } else {
        echo '<li><input type="text" name="gender" placeholder="Gender:"></li>';
    }

    if (isset($_SESSION["user_signup"]["age"]) && isset($_SESSION["errors_signup"])) {
        echo '<li><input type="text" name="age" placeholder="Age:" value = "' . $_SESSION["user_signup"]["age"] . '"></li>';
    } else {
        echo '<li><input type="text" name="age" placeholder="Age:"></li>';
    }

    echo "</div>";
    echo "<div class='column-one'>";

    if (isset($_SESSION["user_signup"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<li><input type="text" name="username" placeholder="Username:" value = "' . $_SESSION["user_signup"]["username"] . '"></li>';
    } else {
        echo '<li><input type="text" name="username" placeholder="Username:"></li>';
    }

    echo '<li><input type="password" name="password" placeholder="Password:"></li>';

    if (isset($_SESSION["user_signup"]["email"]) && !isset($_SESSION["errors_signup"]["email_registered"])) {
        echo '<li><input type="email" name="email" placeholder="E-mail:" value = "' . $_SESSION["user_signup"]["email"] . '"></li>';
    } else {
        echo '<li><input type="email" name="email" placeholder="E-mail:"></li>';
    }

    echo '<button class="signup-button">ADD MEMBER</button>';
    echo "</div>";
    echo "</div>";
}

function signup_errors(){
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error){
            echo '<p class="p-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    }else if(isset($_GET["signup"]) && $_GET["signup"] == "success"){
        echo '<div class="success-div">';
        echo '<p class="image-success"><img src="../../../image/successfully.png"</p>';
        echo '<a class="a-register" href="register.php"><button class="register-button">tap to continue</button></a>';
        echo '</div>';
    }
}
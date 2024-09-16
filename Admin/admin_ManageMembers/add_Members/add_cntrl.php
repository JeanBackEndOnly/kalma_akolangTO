<?php

declare(strict_types=1);

function empty_inputs($username, $password, $email,
 $fullName, $address, $phone_no, $gender, $age){
    if(empty($username) || empty($password) || empty($email) ||
        empty($fullName) || empty($address) || empty($phone_no) || empty($gender) || empty($age)){
            return true;
     }else{
        return false;
     }
}

function invalid_email($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
     }else{
        return false;
     }
}

function username_taken(object $pdo, String $username){
    if(get_username($pdo, $username)){
        return true;
    }else{
        return false;
    }
}

function email_registered(object $pdo, String $email){
    if(get_email($pdo, $email)){
        return true;
    }else{
        return false;
    }
}

function get_UserAcc(object $pdo, String $username, String $password){
    $user_Role = "members";
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users (username, password, user_Role) VALUES
    (:username, :password, :user_Role);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->bindParam(":user_Role", $user_Role);
    $stmt->execute();

    return(int) $pdo->lastInsertId();

}   

function get_UserInfo(object $pdo, int $id, String $fullName, String $email, String $address, String $phone_no, String $gender, int $age){
    $query = "INSERT INTO members (users_id, fullName, email, address, phone_no, gender, age) VALUES 
    (:id, :fullName, :email, :address, :phone_no, :gender, :age);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":fullName", $fullName);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":phone_no", $phone_no);
    $stmt->bindParam(":gender", $gender);
    $stmt->bindParam(":age", $age);
    $stmt->execute();
}
function getUserIpnput(object $pdo, String $username, String $password, String $fullName, String $email, String $address, String $phone_no, String $gender, int $age){
        $id = get_UserAcc($pdo, $username, $password);
        get_UserInfo($pdo, $id, $fullName, $email, $address, $phone_no, $gender, $age);
}
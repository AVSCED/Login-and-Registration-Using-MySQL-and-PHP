<?php

//To include the config file
include "../config/config.php";


// To insert Data of a new user into the Database
if (isset($_POST['register'])) {
    $newUser_email = $_POST['newUserEmail'];
    $newUser_Name = $_POST['newUserName'];
    $newUser_Pass = $_POST['newUserPassword'];
    $cPass = $_POST['newUserPasswordConfirm'];
    if ($cPass == $newUser_Pass) {
        $data = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('" . $newUser_Name . "','" . $newUser_email . "','" . $newUser_Pass . "')";
        $result = mysqli_query($connect, $data);
        if (!$result) {
            echo mysqli_error($connect);
        } else {
            echo "Welcome You've Registered Successfully";
        }
    } else {
        echo "Password Entered is incorrect";
    }
}
// To let a esisting user login back into his account
if (isset($_POST['signIn'])) {
    $user_Email = $_POST['userEmail'];
    $user_Pass = $_POST['userPass'];
    $login = "SELECT * FROM `users` WHERE email='$user_Email' AND password='$user_Pass'";
    $check = mysqli_query($connect, $login);
    if (mysqli_num_rows($check) > 0) {
        echo " Logged in Successfuly";
    } else {
        echo "Wrong Credentials";
    }
}

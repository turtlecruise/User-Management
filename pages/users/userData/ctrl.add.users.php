<?php

require '../../../includes/conn.php';

if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check_username = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username'");
    $check_email = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email'");
    $result_username = mysqli_num_rows($check_username);
    $result_email = mysqli_num_rows($check_email);

    if ($result_username == 0 and $result_email == 0) {
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    $insert_user = mysqli_query($conn, "INSERT INTO tbl_users (firstname, middlename, lastname, email, username, password) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$username', '$hashed_pass')");

    header("location: ../list.user.php");
    } else {
        header("location: ../add.users.php");
    }
    

    

}



?>
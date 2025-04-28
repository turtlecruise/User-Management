<?php

require '../../../includes/conn.php';

$id = $_GET['user_id'];

if (isset($_POST['submit'])) {

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hashed_pass = password_hash($password, PASSWORD_DEFAULT);

$update_user = mysqli_query($conn, "UPDATE tbl_users SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', email = '$email', username = '$username', password = '$hashed_pass' WHERE user_id = '$id';");


    header("location: ../update.user.php?user_id=" . $id);
}



?> 
<?php

require '../../../includes/conn.php';

$id = $_GET['user_id'];


$delete_users = mysqli_query($conn, "DELETE from tbl_users WHERE user_id = '$id'");

    header("location: ../list.user.php");
    



?>
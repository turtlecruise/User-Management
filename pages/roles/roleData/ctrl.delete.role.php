<?php

require '../../../includes/conn.php';

$id = $_GET['role_id'];


$delete_users = mysqli_query($conn, "DELETE from tbl_roles WHERE role_id = '$id'");

    header("location: ../list.role.php");
    



?>
<?php
include "config.php";

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    //delete query

    $sql = "DELETE FROM `users` WHERE `id` = '$user_id'";


    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record Deleted successfully.";
    } else {
        "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>
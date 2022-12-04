<?php
include_once "db_connect.php";

if(isset($_GET['id'])) {
    $db = $GLOBALS['db'];
    $delete = $db->deletePost($_GET['id']);

    if($delete) {
        header("Location: adminpost.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: adminpost.php");
}
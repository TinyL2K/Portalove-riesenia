<?php
include_once "db_connect.php";

if(isset($_POST['category'])) {
    $db = $GLOBALS['db'];
    $insert = $db->insertPost($_POST['category'], $_POST['title'], $_POST['content'], $_POST['date']);
    if($insert) {
        header("Location: adminpost.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: adminpost.php");

}
<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updatePost($_POST['id'], $_POST['kategoria'], $_POST['nazov'], $_POST['popis']);

    if($update) {
        header("Location: adminpost.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: adminpost.php");
}
<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
?>
<form action="insertpost.php" method="post">
    Category:<br>
    <input name="category" type="text" id="category" /><br>
    Title:<br>
    <input name="title" type="text" id="title" /><br>
    Content:<br>
    <input name="content" type="text" id="content" /><br>
    Date:<br>
    <input name="date" type="datetime-local" id="date" /><br>
<input type="submit" name="submit" value="Pridat">
</form>
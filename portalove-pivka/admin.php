<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
$messages = $db->getAllMessages();
?>

<ul>
    <a href="index.php">Navrat</a>
    <a href="adminpost.php">Sprava postov</a>
</ul>
<br><br><br>

<ul>
    <?php
        foreach ($messages as $message) {
            echo "<li>Name: ".$message['name'].", Email: ".$message['email'].", Subject: ".$message['subject'].", Message: ".$message['message']."</li>";
            echo '<li><a href="deletemessages.php?id='.$message['id'].'">Delete</a></li>';
        }
    ?>
</ul>

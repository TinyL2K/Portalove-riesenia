<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$postDetails = $db->getPostDetails($_GET['id']);
?>

<form action="updatepost.php" method="post">
    Category:<br>
    <input type="text" name="kategoria" value="<?php echo $postDetails[0]['kategoria']; ?>" /><br>
    Title:<br>
    <input type="text" name="nazov" value="<?php echo $postDetails[0]['nazov']; ?>" /><br>
    Content:<br>
    <textarea name="popis"><?php echo $postDetails[0]['popis']; ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $postDetails[0]['id_post']; ?>">
    <input type="submit" name="submit" value="Update">
</form>
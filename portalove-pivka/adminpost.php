<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
$posts = $db->getPosts();
?>

<ul>
    <a href="index.php">Navrat</a>
    <a href="admin.php">Spravy</a>
    <a href="insertpostformular.php">Pridat post</a>
</ul>
<br><br><br>

<ul>
<?php
foreach ($posts as $post) {
    echo "<li>Category: ".$post['category'].", Title: ".$post['title'].", Content: ".$post['content'].", Date: ".$post['date']."</li>";
    echo '<li><a href="deletepost.php?id='.$post['id'].'">Delete</a></li>';
    echo '<li><a href="updatepostform.php?id='.$post['id'].'">Update</a></li>';
    echo "<br>";
}
?>
</ul>
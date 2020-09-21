<?php
// post_view.php
include 'mysql.php';
$result = mysql_safe_query('SELECT * FROM posts WHERE id=%s LIMIT 1', $_GET['id']);

if(!mysql_num_rows($result)) {
    echo 'Post #'.$_GET['id'].' not found';
    exit;
}

$row = mysql_fetch_assoc($result);
echo '<h2>'.$row['title'].'</h2>';
echo '<em>Posted '.date('F j<\s\up>S</\s\up>, Y', $row['date']).'</em><br/>';
echo nl2br($row['body']).'<br/>';
echo '<a href="post_edit.php?id='.$_GET['id'].'">Edit</a> | <a href="post_delete.php?id='.$_GET['id'].'">Delete</a> | <a href="diarypost.php">View All</a>';

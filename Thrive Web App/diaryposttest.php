<?php
// index.php
include 'mysql.php';

echo '<h1>My Positive Experience Diary</h1>';
echo "<em>Post 10 Positive Recent Experiences</em><hr/>";

$result = mysql_safe_query('SELECT * FROM posts WHERE userID = '. $_SESSION["userID"] .' ORDER BY date DESC');

if(!mysql_num_rows($result)) {
    echo 'No posts yet.';
} else {
    while($row = mysql_fetch_assoc($result)) {
        echo '<h2>'.$row['title'].'</h2>';
        $body = substr($row['body'], 0, 300);
        echo nl2br($body).'...<br/>';
        echo '<a href="post_view.php?id='.$row['id'].'">Read More</a> | ';   
        echo '<hr/>';
    }
}

echo <<<HTML
<a href="post_add.php">+ New Post</a>
HTML;

?>
<?php
include 'db/dbh.php';

$commentNewCount = $_POST['commentNewCount']; //получаем post

$sql = "SELECT * FROM comments LIMIT $commentNewCount";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die('Неверный запрос: ');
}

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)){
        echo "<p>";
        echo $row['author'];
        echo "<br>";
        echo $row['message'];
        echo "</p>";
    }
} else {
    echo "There are no comments";
}
?>
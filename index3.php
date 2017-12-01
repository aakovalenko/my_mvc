<?php
    include 'db/dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        var commentCount = 2;
        $("button").click(function(){
            commentCount = commentCount + 2;
            $("#comments").load("load-comments.php", { //отправляем post
                commentNewCount: commentCount,
                777777777777777: 888888888888
            });
        })
    })
    </script>
</head>
<body>

<div id ="comments">
    <?php
        $sql = "SELECT * FROM comments LIMIT 2";
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

</div>
<button id="btn">Show more comments</button>
</body>
</html>
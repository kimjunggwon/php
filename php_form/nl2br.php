<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT * FROM prodreview ORDER BY prodreviewid DESC LIMIT 1";
    $res = $dbConnect -> query($sql);

    $prodReview = $res -> fetch_array(MYSQLI_ASSOC);
    echo nl2br($prodReview['content']);
?>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT max(science) FROM student";
    $result = $dbConnect -> query($sql);
    $reviewInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo '가장 높은 과학 점수 : '.$reviewInfo['max(science)'];
?>
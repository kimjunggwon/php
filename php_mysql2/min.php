<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT min(math) FROM student";
    $result = $dbConnect -> query($sql);
    $reviewInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo '가장 낮은 수학 점수 : '.$reviewInfo['min(math)'];
?>
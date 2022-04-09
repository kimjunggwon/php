<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT sum(english) FROM student";
    $result = $dbConnect -> query($sql);
    $reviewInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo '영어 점수 합계 : '.$reviewInfo['sum(english)'];
?>
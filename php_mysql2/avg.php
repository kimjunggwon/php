<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT avg(math) FROM student";
    $result = $dbConnect -> query($sql);
    $reviewInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo '수학 점수 평균 : '.$reviewInfo['avg(math)'];
?>
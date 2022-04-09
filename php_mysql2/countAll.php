<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT count(*) FROM student";
    $result = $dbConnect -> query($sql);
    $reviewInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo '레코드 수 : '.$reviewInfo['count(*)'];
?>
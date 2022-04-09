<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "DESC member";
    $res = $dbConnect -> query($sql);

    $list = $res -> fetch_array(MYSQLI_ASSOC);

    echo '<pre>';
    var_dump($list);
    echo '</pre>';
?>
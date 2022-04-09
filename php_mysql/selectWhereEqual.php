<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "SELECT name, userid FROM member WHERE memberid = 2";
    $result = $dbConnect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    echo "이름 : ".$memberInfo['name'];
    echo "<br>";
    echo "아이디 : ".$memberInfo['userid'];
?>
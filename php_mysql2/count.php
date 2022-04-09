<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    function studentRecord(){
        global $dbConnect;
        $sql = "SELECT count(class) FROM student";
        $result = $dbConnect -> query($sql);
        $reviewInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "class 필드를 기준으로 한 레코드 수 : ";
        echo $reviewInfo['count(class)'];
        echo "<br>";
    }

    studentRecord();

    $sql = "UPDATE student SET class = NULL WHERE id = 1";

    $dbConnect -> query($sql);

    studentRecord();
?>
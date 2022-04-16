<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $text = addslashes($_POST['text']);

    $sql = "INSERT INTO prodreview(memberid, content, reg_date) ";
    $sql .= "VALUES (1, '{$text}', NOW())";
    echo $sql;
    echo "<br>";

    $res = $dbConnect -> query($sql);

    if($res){
        echo "입력 성공";
    }else{
        echo "입력 실패";
    }
?>
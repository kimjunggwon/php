<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $sql = "SELECT m.name, r.content, r.reg_date FROM member m JOIN prodReview r ";
    $sql .= "ON (m.memberid = r.memberid)";

    $res = $dbConnect -> query($sql);

    if($res){
        $dataCount = $res -> num_rows;

        for($i = 0; $i < $dataCount; $i++){
            $reviewInfo = $res -> fetch_array(MYSQLI_ASSOC);
            echo "{$reviewInfo['reg_date']} - {$reviewInfo['name']}님, {$reviewInfo['content']}";
            echo "<br>";
        }
    }
?>
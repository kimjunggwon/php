<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database2/connectDB.php';

    $sql = "SELECT name FROM mymember ORDER BY name DESC";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo '<br>';
    }
    /*
     데이터 정렬
      SELECT [필드명] FROM [테이블명] ORDER BY [정렬할 필드명] DESC(내림차순) 또는 ASC(오름차순)
    */
?>
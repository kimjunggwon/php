<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database2/connectDB.php';

    $sql = "SELECT name FROM mymember LIMIT 3";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;
    echo "데이터 수 : {$dataCount}<br>";

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQL_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
    }
    /*
     테이블에서 불러올 레코드 수 지정
      SELECT [필드명] FROM [테이블명] LIMIT 불러올 수
    */

    echo "<br>";

    $sql = "SELECT name FROM mymember LIMIT 1, 3";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;
    echo "데이터 수 : {$dataCount}<br>";

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQL_ASSOC);
        echo "이름 : ".$memberInfo['name'];
        echo "<br>";
    }

     /*
     테이블에서 불러올 레코드 수 값 2개 지정
      SELECT [필드명] FROM [테이블명] LIMIT 불러올 순번, 불러올 개수
    */
?>
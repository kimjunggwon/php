<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database2/connectDB.php';

    $sql = "SELECT name, userid FROM mymember";
    //mymember 테이블에서 필드가 name, userid를 가져옴
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;
    //쿼리 통해 레코드의 수를 반환

    for($i = 0; $i < $dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_NUM);
        echo "이름 : ".$memberInfo[0];
        echo "<br>";
        echo "아이디 : ".$memberInfo[1];
        echo "<hr>";
    }
    /*
    테이블 데이터 선택 
     - SELECT [필드명] FROM [테이블명]
     num_rows : 레코드의 수를 반환
     fetch_array(MYSQLI_NUM) : 인덱스를 숫자로 지정해서 데이터를 출력

    */
?>
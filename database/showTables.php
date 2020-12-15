<meta charset="utf-8"> 
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "SHOW TABLES";
    //테이블 확인 명령어
    $res = $dbConnect -> query($sql);
    //쿼리문 실행

    if($res){
        $list = $res -> fetch_array(MYSQLI_BOTH);
        //데이터를 배열 형식으로 데이터를 볼 수 있음
        echo "테이블 목록 <br>";

        for($i = 0; $i < (count($list) - 1); $i++){
        //배열 형식이므로 배열은 0부터 시작이여서 -1을 조건
            echo $list[$i];
            echo '<br>';
        }
    }else{
        echo "테이블이 존재하지 않음";
    }
    /*
    SHOW TABLE : 데이터 베이스 안에 존재하는 테이블 확인 쿼리
    */
?>
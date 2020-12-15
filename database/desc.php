<meta charset="utf-8">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "DESC mymember";
    //테이블 정보 확인 명령어
    $res = $dbConnect -> query($sql);
    //쿼리문 실행

    while($list = $res -> fetch_array(MYSQLI_ASSOC)){
        echo 'Field : '.$list['Field'];
        echo '<br>';
        echo 'Type : '.$list['Type'];
        echo '<br>';
        echo 'Null : '.$list['Null'];
        echo '<br>';
        echo 'Key : '.$list['Key'];
        echo '<br>';
        echo 'Default : '.$list['Default'];
        echo '<br>';
        echo 'Extra : '.$list['Extra'];
        echo '<br>';
        echo '<br>';
        //배열 형식으로 
    }

    /*
    desc : 테이블에 설정된 값을 조회하는 쿼리
    desc 구조 : desc 테이블명
    */
?>
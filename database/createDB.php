<meta charset="utf-8">
<?php
    $host = 'localhost';
    $user = 'root';
    $pw   = 'apmsetup';
    $dbConnect = new mysqli($host, $user, $pw);
    $dbConnect -> set_charset('utf-8');

    if(mysqli_connect_errno()){
        echo "데이터 베이스 접속 실패";
    }else{
        $sql ="CREATE DATABASE study";
        $res = $dbConnect -> query($sql);

        if($res){
            echo "데이터 베이스 생성 완료";
        }else{
            echo "데이터 베이스 생성 실패";
        }
    }

    /*
    query() : DB 접속이 정상적으로 연결 시, 쿼리문을 사용할 수 있는 메소드
     - query() 구조 : query(쿼리문)
    CREATE 데이터 베이스 구조 : CREATE DATABASE 데이터베이스명
    쿼리문 : CREATE DATABASE study -> study 데이터 베이스를 생성
    */
?>
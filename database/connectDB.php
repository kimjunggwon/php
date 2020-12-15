<meta charset="utf-8">
<?php
    $host   = 'localhost';
    $user   = 'root';
    $pw     = 'apmsetup';
    $dbName = 'study';
    //DB 접속 정보 변수 설정
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    //mysqli 생성자를 이용하여 DB정보 저장
    $dbConnect -> set_charset('utf-8');
    //DB 정보가 들어갈 때 utf-8로 셋팅

    if(mysqli_connect_errno()){
    //DB 접속이 잘 되었는지에 대한 유무
        echo "데이터베이스 접속 실패";
        echo mysqli_connect_error();
    }else{
        echo "접속 성공";
    }
    /*
    mysqli 생성자 : 데이터 베이스 접속 정보 클래스
     - mysqli(호스트 주소, 사용자ID, 사용자PW, 사용할 데이터 베이스명)
       -> 해당 순서대로 지켜야 접속이 가능
    mysqli_connect_errno() : 데이터베이스 접속 여부 검사 함수
    mysqli_connect_error() : 데이터베이스 접속이 실패할 경우 오류 메시지 출력 함수
    */
?>
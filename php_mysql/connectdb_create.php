<?php
    $host = "localhost";
    $user = "root";
    $pw = "test";
    $dbConnect = new mysqli($host, $user, $pw);
    $dbConnect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "disconnect";
        echo mysqli_connect_error();
    }else{
        $sql = "CREATE DATABASE test_db";
        $res = $dbConnect -> query($sql);

        if($res){
            echo "DB 생성 완료";
        }else{
            echo "DB 생성 실패";
        }
    }
?>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "CREATE TABLE member(";
    $sql .= "memberid int unsigned auto_increment comment '고유번호',";
    $sql .= "userid varchar(15) not null comment '아이디',";
    $sql .= "name varchar(15) not null comment '이름',";
    $sql .= "password varchar(30) not null comment '비밀번호',";
    $sql .= "email varchar(30) not null comment '이메일',";
    $sql .= "birthday char(10) not null comment '생년월일',";
    $sql .= "gender enum('m','w','x') default 'x' comment '성별',";
    $sql .= "reg_date datetime not null comment '시간',";
    $sql .= "primary key(memberid))";
    $sql .= "charset=utf8 comment='회원 정보 테이블';";

    $res = $dbConnect -> query($sql);

    if($res){
        echo "테이블 생성 완료";
    }else{
        echo "테이블 생성 실패";
    }
?>
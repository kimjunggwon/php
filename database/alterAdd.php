<meta charset="utf-8">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql  = "ALTER TABLE mymember ADD currentAge ";
    $sql .= "int unsigned COMMENT '현재 나이' AFTER gender";
    //테이블 필드 추가 하는 쿼리
    $res = $dbConnect -> query($sql);

    if($res){
        echo "필드 추가 완료";
    }else{
        echo "필드 추가 실패";
    }

    /*
    테이블 추가 쿼리
     - ALTER TABLE [테이블명] ADD [추가할 필드명] [옵션] [코멘트] [위치]
    */
?>
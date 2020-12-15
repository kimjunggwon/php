<meta charset="utf-8">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql  = "ALTER TABLE mymember MODIFY nationality ";
    $sql .= "varchar(15) comment '국적' AFTER gender";
    //nationality 필드를 변경하는 쿼리
    $res  = $dbConnect -> query($sql);

    if($res){
        echo "필드 정보 변경 완료";
    }else{
        echo "필드 정보 변경 실패";
    }
    /*
     테이블 필드 정보 변경 쿼리
       - ALTER TABLE [테이블명] MODIFY [변경할 필드명] [옵션] [위치]
    */
?>
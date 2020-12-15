<meta charset="utf-8">
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "ALTER TABLE mymember CHANGE currentAge nationality int";
    //테이블 필드명 변경 쿼리
    $res = $dbConnect -> query($sql);

    if($res){
        echo "필드명 변경 완료";
    }else{
        echo "필드명 변경 실패";
    }

    /*
     테이블 필드 변경 쿼리
      - ALTER TABLE [테이블명] CHANGE [기존 필드명] [변경할 필드명] [기존 데이터형]
    */
?>
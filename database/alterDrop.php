<?php
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "ALTER TABLE mymember DROP nationality";
    //테이블 필드 삭제 쿼리
    $res = $dbConnect -> query($sql);

    if($res){
        echo "필드 삭제 완료";
    }else{
        echo "필드 삭제 실패";
    }
    /*
    테이블 삭제 쿼리
     - ALTER TABLE [테이블명] DROP [삭제할 필드명]
    */
?>
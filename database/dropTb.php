<?
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "DROP TABLE test";
    $res = $dbConnect -> query($sql);

    if($res){
        echo "테이블 삭제 완료";
    }else{
        echo "테이블 삭제 실패";
    }

    /*
    테이블 삭제 쿼리
     - DROP TABLE [테이블명];
    */
?>
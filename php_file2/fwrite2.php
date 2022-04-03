<?php
    $content = "test1test2test3test4test5";

    $fileName = 'test.txt';

    $fp = fopen('./'.$fileName, 'a');
    $fw = fwrite($fp, $content);

    if($fw == false){
        echo "파일 쓰기에 실패했습니다.";
    }else{
        echo "파일 쓰기 완료";
    }

    fclose($fp);
?>
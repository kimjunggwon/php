<?php
    $content = 'test';

    $fileName = 'test.txt';

    $fp = fopen($fileName, 'w');

    $fw = fwrite($fp, $content);

    if($fw == false){
        echo "파일 쓰기에 실패했습니다.";
    }else{
        echo "파일 쓰기 완료";
    }

    fclose($fp);
?>
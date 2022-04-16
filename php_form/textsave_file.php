<?php
    $content = $_POST['text'];
    $filename = './text.txt';

    $fp = fopen($filename, 'w');

    if($fp){
        $fw = fwrite($fp, $content);

        if($fw){
            echo "파일 쓰기 완료";
        }else{
            echo "파일 쓰기 실패";
        }
    }else{
        echo "파일 열기 실패";
    }
?>
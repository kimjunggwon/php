<?php
    $fileName = "test.txt";

    if(file_exists($fileName)){
        $fopen = fopen($fileName, 'r');
        if($fopen){
            $fread = fread($fopen, filesize($fileName));
            if($fread){
                echo $fread;
                fclose($fopen);
            }else{
                echo "파일 읽기에 실패했습니다.";
            }
        }else{
            echo "파일 열기에 실패했습니다.";
        }
    }else{
        echo "파일이 존재하지 않습니다.";
    }
?>
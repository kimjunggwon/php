<meta charset="utf-8">
<?php
    $folderName = 'hello';
    $isDir = is_dir($folderName);

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    }else{
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }

    echo "<br>";

    $folderName = "world";
    $isDir = is_dir($folderName);

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    }else{
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }
    /*
    is_dir() : 폴더의 존재 여부 확인 함수
     - is_dir() 구조 : is_dir(폴더명)
    */
?>
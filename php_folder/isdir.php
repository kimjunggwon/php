<?php
    $folderName = 'test';
    $isDir = is_dir($folderName);

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    }else{
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }

    echo "<br>";

    $folderName = 'test2';
    $isDir = is_dir($folderName);

    if($isDir){
        echo "{$folderName} 폴더가 존재합니다.";
    }else{
        echo "{$folderName} 폴더가 존재하지 않습니다.";
    }
?>
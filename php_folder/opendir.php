<?php
    $folderName = 'test';
    $opendir = opendir($folderName);

    if($opendir){
        echo "{$folderName} 폴더를 열었습니다.";
    }else{
        echo "{$folderName} 폴더를 여는데 실패했습니다.";
    }

    echo "<br>";

    $folderName = 'test2';
    $opendir = opendir($folderName);

    if($opendir){
        echo "{$folderName} 폴더를 열었습니다.";
    }else{
        echo "{$folderName} 폴더를 여는데 실패했습니다.";
    }

    echo "<br>";
?>
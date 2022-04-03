<?php
    $folderName = 'test';

    $mkdirDir = mkdir($folderName, '777');

    if($mkdirDir){
        echo "{$folderName} 폴더 생성 완료";
    }else{
        echo "{$folderName} 폴더 생성 실패";
    }
?>
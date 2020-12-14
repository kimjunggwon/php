<?php
    $folderName = 'hello';
    $makeDir = mkdir($folderName, '777');
    if($makeDir){
        echo "{$folderName} 폴더 생성 완료";
    }else{
        echo "{$folderName} 폴더 생성 실패";
    }

    /*
    mkdir() : 디렉토리 생성 함수
     - mkdir() 구조 : mkdir(디렉토리명, 퍼미션 설정값)
    */
?>
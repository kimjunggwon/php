<meta charset="utf-8">
<?php
    $folderName = '../dir';
    if(is_dir($folderName)){ //폴더 존재 여부
        echo "폴더가 존재합니다.<br>";
        $opendir = opendir($folderName); //폴더를 열었는지 여부
        if($opendir){
            echo "폴더를 열었습니다.<br>";
            while($readdir = readdir($opendir)){ //폴더를 읽었는지 여부
                echo $readdir."<br>";
            }
        }else{
            echo "폴더를 열지 못했습니다.";
        }
    }else{
        echo "폴더가 존재하지 않습니다.";
    }

    /*
    readdir() : 폴더의 내용을 읽을 수 있는 함수
     - readdir() 구조 : readdir(opendir(폴더명))
    */
?>
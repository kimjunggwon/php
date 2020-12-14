<meta charset="utf-8">
<?php
    rmdir('./hello2');
    if(is_dir('./hello2')){
        echo "hello2 폴더가 존재합니다.";
    }else{
        echo "hello2 폴더가 존재하지 않습니다.";
    }
?>
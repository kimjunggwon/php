<?php
    rmdir('test');

    if(is_dir('test')){
        echo "test 폴더가 존재합니다.";
    }else{
        echo "test폴더가 존재하지 않습니다.";
    }
?>
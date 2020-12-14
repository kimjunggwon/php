<meta charset="utf-8">
<?php
    $fopen = fopen('helloworld.txt','r+');
    if($fopen){
        echo "파일을 열었습니다.";
    }else{
        echo "파일을 여는데 실패했습니다.";
    }

    /*
    fopen() : 파일을 여는 함수
     - fopen() 구조 : fopen(파일 경로 및 파일명, 파일을 여는 옵션)
    */
?>
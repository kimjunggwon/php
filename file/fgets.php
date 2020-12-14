<meta charset="utf-8">
<?php
    $fileName = "helloworld.txt";

    if(file_exists($fileName)){
        $fopen = fopen($fileName, 'r');
        $readByte = 512;
        while($fgets = fgets($fopen, $readByte)){
            echo $fgets."<br>";
        }
    }
    /*
    fgets() : 파일의 내용을 한 라인씩 불어오는 함수
     - fgets() 구조 : fgets(fopen(파일명), 불러올 용량)
    */

?>
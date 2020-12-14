<meta charset="utf-8">
<?php
    $content = "이 내용은 앞의 내용의 뒤에 붙어 저장됩니다.";
    $fileName = "helloworld.txt";

    $fp = fopen('./'.$fileName, 'a');
    $fw = fwrite($fp, $content);

    if($fw == false){
        echo "파일 쓰기에 실패했습니다.";
    }else{
        echo "파일 쓰기 완료";
    }
    fclose($fp);

    /*
    fwrite() : 파일에 쓰는 함수
     - fwrite() 구조 : fwrite(fopen(파일명), 파일의 쓸 내용);
     - fopen의 a를 추가하면 파일의 내용을 이어서 수정
    */
?>
<meta charset="utf-8">
<?php
    $fileName = "helloworld.txt";
    //열어볼 파일명 저장
    if(file_exists($fileName)){
    //파일 존재 여부 확인
        $fopen = fopen($fileName, 'r');
        //파일 열기
        if($fopen){
            $fread = fread($fopen, filesize($fileName));
            //파일을 열고 용량을 검사
            if($fread){
                echo $fread;
                //파일의 내용을 출력
                fclose($fopen);
            }else{
                echo "파일 읽기에 실패했습니다.";
            }
        }else{
            echo "파일 열기에 실패했습니다.";
        }
    }else{
        echo "파일이 존재하지 않습니다.";
    }

    /*
    file_extsis() : 파일이 존재하는 여부 있으면 true, 없으면 false
     - file_extsis() 구조 : file_extsis(파일명)
    fread() : 파일의 내용을 읽는 함수
     - fread() 구조 : fread(fopen(파일), 불러올 용량);

    */
?>
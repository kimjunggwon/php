<meta charset="utf-8">
<?php
    if(isset($str)){
        echo "변수 str이 존재합니다.";
    }else{
        echo "변수 str이 존재하지 않습니다.";
    }
    echo "<br>";

    $str = "string";
    if(isset($str)){
        echo "변수 str이 존재합니다.";
    }else{
        echo "변수 str이 존재하지 않습니다.";
    }
    //isset() : 변수가 존재하는지에 대한 여부 함수
    //isset() 구조 : isset(변수)
?>
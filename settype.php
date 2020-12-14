<meta charset="utf-8">
<?php
    $val = "true";
    echo "변수 val의 데이터형 : ".gettype($val);
    echo "<br>";
    //초기에 변수에는 문자열 데이터를 저장

    settype($val,'bool');
    //문자열을 논리값으로 데이터형 변환
    echo "변수 val의 데이터형 : ".gettype($val);
    echo "<br>";
    var_dump($val);
    //변경된 데이터형이 출력
    
    //settype() : 변수에 설정된 데이터형을 변환하는 함수
?>
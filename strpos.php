<meta charset="utf-8">
<?php
    $str = "web developer";
    $findStr = 'd';
    $pos = strpos($str,$findStr);
    echo "문자열{$findStr}의 위치는 : ".$pos;
    //strpos() : 문자열의 위치를 찾아주는 함수
    //strpos() 구조 : strpos(전체 문자열, 찾을 문자);
?>
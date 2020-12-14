<meta charset="utf-8">
<?php
    $str = " 양쪽 모두 공백 없앰 ";
    echo '|'.trim($str).'|';
    echo "<br>";

    $str = " 앞만 공백 없앰 ";
    echo '|'.ltrim($str).'|';
    echo "<br>";

    $str = " 뒤만 공백 없앰 ";
    echo '|'.rtrim($str).'|';

    //trim() : 문자열의 공백을 없애는 함수
    //trim() : 양쪽 공백, ltrim(): 앞에 공백, rtrim(): 뒤에 공백

?>
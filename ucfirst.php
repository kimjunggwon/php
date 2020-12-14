<meta charset="utf-8">
<?php
    $str = "everdevel";
    echo "첫 글자가 영문인 경우:".ucfirst($str);
    echo "<br>";
    //ucfirst() : 문자열이 영문인 경우 가장 앞에 영문을 대문자로 변환

    $str2 = "everdevel, tomodevel, startwebcodng";
    echo ucwords($str2);
    echo "<br>";

    $str3 = 'one suger dream';
    $str3 = ucwords($str3);
    echo $str3;
    //ucwords(): 문자열이 영문인 경우 띄어쓰기 간격으로 가장 앞에 영문을 대문자로 변환
?>
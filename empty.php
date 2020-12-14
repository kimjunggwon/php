<meta charset="utf-8">
<?php
    $var = '';
    echo "값이 빈 문자열인 경우";
    var_dump(empty($var));
    echo '<br>';

    $var = NULL;
    echo '값이 NULL인 경우';
    var_dump(empty($var));
    echo '<br>';

    $var = array();
    echo '값이 빈 배열인 경우';
    var_dump(empty($var));
    echo '<br>';

    $var = '0';
    echo '값이 문자열 0인 경우';
    var_dump(empty($var));
    echo '<br>';

    $var = 'string';
    echo '값이 문자열 string인 경우';
    var_dump(empty($var));

    //empty() : 변수 안에 들어간 값이 빈 값인지 확인을 하는 함수
?>
<?php
    $pattern = '/^[0-9]+$/';

    $int = 123456789;

    if(preg_match($pattern, $int, $matches)){
        echo "값 {$int}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "값에 숫자 외의 문자가 있는지 확인";
    }
?>
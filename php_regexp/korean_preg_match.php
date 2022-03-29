<?php
    $pattern = '/^[가-힣]{3,}$/';

    $str = '안녕하세요';

    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "이름에 특수문자, 한글 또는 숫자가 있습니다.";
    }
?>
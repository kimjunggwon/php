<?php
    $pattern = '/^(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}$/';

    $phone = '010-1234-5678';

    if(preg_match($pattern, $phone, $matches)){
        echo "값 {$phone}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "값에 전화번호 외의 문자가 있는지 확인";
    }
?>
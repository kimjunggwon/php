<?php
    $pattern = '/^[a-zA-Z]{1}[a-zA-Z0-9.\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/';

    $email = 'test@naver.com';

    if(preg_match($pattern, $email, $matches)){
        echo "값 {$email}은(는) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "이메일 외의 문자가 있는지 확인";
    }
?>
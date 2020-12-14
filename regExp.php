<meta charset="utf-8">
<?php
    $pattern = '/^i$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //특정 문자열이 i로 시작하고 i로 끝나는지 검사하는 정규 표현식
    $str = 'i';

    if(preg_match($pattern, $str, $matches)){
        echo "값은 {$str}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }else{
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
    }
    /*
    preg_match() : 정규 표현식 패턴 검사 함수        
    preg_match() 구조 : preg_match(패턴, 검사할 텍스트, 반환할 패턴 일치 결과)
    */


    $pattern2 = '/^i+$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //1byte 이상 체크는 +
    $str2 = 'ii';

    if(preg_match($pattern2, $str2, $matches2)){
        echo "값은 {$str2}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches2);
        echo "</pre>";
    }else{
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
    }

    $pattern3 = '/^[가-힣]{3,}$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //한글은 기본적으로 한 글자 당 3byte
    //한글 검사 [가-힣]
    //{3,} : 한 글자 이상 검사

    $str3 = '웹코딩시작하기';

    if(preg_match($pattern3, $str3, $matches3)){
        echo "값은 {$str3}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches3);
        echo "</pre>";
    }else{
        echo "이름에 특수문자, 영문 또는 숫자가 있는지 확인 요망";
    }

    $pattern4 = '/^[A-Z]+$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //한글은 기본적으로 한 글자 당 3byte
    //영문 대문자 검사 [A-Z]
    //1byte 이상 체크는 +

    $str4 = 'TOMDEVEL';

    if(preg_match($pattern4, $str4, $matches4)){
        echo "값은 {$str4}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches4);
        echo "</pre>";
    }else{
        echo "값에 영문 대문자 외의 문자가 있는지 확인 요망";
    }

    $pattern5 = '/^[a-z]+$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //한글은 기본적으로 한 글자 당 3byte
    //영문 대문자 검사 [a-z]
    //1byte 이상 체크는 +

    $str5 = 'everdevel';

    if(preg_match($pattern5, $str5, $matches5)){
        echo "값은 {$str5}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches5);
        echo "</pre>";
    }else{
        echo "값에 영문 소문자 외의 문자가 있는지 확인 요망";
    }

    $pattern6 = '/^[a-zA-Z가-힣]+$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //한글은 기본적으로 한 글자 당 3byte
    //영문 소문자[a-z] 영문 소문자 + 영문 대문자[a-zA-Z],영문 소문자 + 영문 대문자 + 한글[a-zA-Z가-힣] 
    //1byte 이상 체크는 +

    $str6 = '안녕하세요Hello';

    if(preg_match($pattern6, $str6, $matches6)){
        echo "값은 {$str6}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches6);
        echo "</pre>";
    }else{
        echo "값에 영문과 한글 외의 문자가 있는지 확인 요망";
    }

    $pattern7 = '/^[a-zA-Z가-힣. ]+$/';
    //정규 표현식 기본 구조 -> '/패턴입력/'
    //첫 글자는 ^ 마지막 글자는 $
    //한글은 기본적으로 한 글자 당 3byte
    //영문 소문자[a-z] 영문 소문자 + 영문 대문자[a-zA-Z],영문 소문자 + 영문 대문자 + 한글[a-zA-Z가-힣] 
    //1byte 이상 체크는 +
    //점을 허용 .
    //스페이스 허용 []

    $str7 = '안녕하세요Hello. ';

    if(preg_match($pattern7, $str7, $matches7)){
        echo "값은 {$str7}은(는) 정규식 표현의 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches7);
        echo "</pre>";
    }else{
        echo "값에 영문, 한글, .(점) 그리고 띄어쓰기 외의 문자가 있는지 확인 요망";
    }
?>
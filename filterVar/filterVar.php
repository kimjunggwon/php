<meta charset="utf-8">
<?php
    function checkEmail($email){
        $emailCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);
        //이메일에 대한 유효성 검사
        $returnInfo = false;
        if($emailCheck){
            $returnInfo = true;
        }
        return $returnInfo;
    }

    $email = "mybookforweb@gmail.com";

    if(checkEmail($email)){
        echo "{$email}는 올바른 이메일 주소입니다.";
    }else{
        echo "{$email}은 잘못된 이메일 주소입니다.";
    }
    
    echo "<br>";

    function checkUrl($url){
        $urlCheck = filter_Var($url, FILTER_VALIDATE_URL);

        $returnInfo = false;
        if($urlCheck){
            $returnInfo = true;
        }
        return $returnInfo;
    }

    $url = "http://www.tomodevel.com";

    if(checkUrl($url)){
        echo "{$url}는 올바른 URL입니다.";
    }else{
        echo "{$url}는 잘못된 URL입니다.";
    }

    echo "<br>";

    $url = "www.nave.com";
    if(checkUrl($url)){
        echo "{$url}는 올바른 URL입니다.";
    }else{
        echo "{$url}는 잘못된 URL입니다.";
    }

    echo "<br>";

    $ip = "192.168.0.1";
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);

    if($ipCheck){
        echo "{$ip}는 올바른 ip입니다.";
    }else{
        echo "{$ip}는 잘못된 ip입니다.";
    }

    echo "<br>";

    $ip = "192.";
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);

    if($ipCheck){
        echo "{$ip}는 올바른 ip입니다.";
    }else{
        echo "{$ip}는 잘못된 ip입니다.";
    }
    echo "<br>";

    function checkInt($int){
        $intCheck = filter_Var($int, FILTER_VALIDATE_INT);

        if($intCheck){
            echo "{$int}는 정수입니다.";
        }else{
            echo "{$int}는 정수가 아닙니다.";
        }
        echo "<br>";
    }

    checkInt(694);
    checkInt(1.25);
    checkInt("hello");

    $float = 192.12;
    $floatcheck = filter_Var($float, FILTER_VALIDATE_FLOAT);

    if($floatcheck){
        echo "{$float}는 실수입니다.";
    }else{
        echo "{$float}는 실수가 아닙니다.";
    }

    /*
    filter_Var() 함수 : 유효성을 검사하기 위해서 미리 php에서 지원하는 내장 함수
     - filter_Var() 구조 : filter_Var(검사할 값, 유효성 검사 함수)
       1. FILTER_VALIDATE_EMAIL : 이메일 주소 유효성 검사 상수
       2. FILTER_VALIDATE_URL : URL 주소 유효성 검사 상수
       3. FILTER_VALIDATE_IP : IP 주소 유효성 검사 상수
       4. FILTER_VALIDATE_INT : 정수에 대한 유효성을 검사 상수
       5. FLITER_VALIDATE_FLOAT : 실수에 대한 유효성을 검사 상수
    */
?>
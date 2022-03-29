<?php
    function checkUrl($url){
        $urlCheck = filter_Var($url, FILTER_VALIDATE_URL);

        $returnInfo = false;
        if($urlCheck){
            $returnInfo = true;
        }

        return $returnInfo;
    }

    $url = "https://google.com";

    if(checkUrl($url)){
        echo "{$url}는 올바른 URL 입니다.";
    }else{
        echo "{$url}는 잘못된 URL 입니다.";
    }

    echo "<br>";

    $url = "www.google.com";

    if(checkUrl($url)){
        echo "{$url}는 올바른 URL 입니다.";
    }else{
        echo "{$url}는 잘못된 URL 입니다.";
    }

?>
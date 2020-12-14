<?php
    //setcookie("memberID", "everdevel",time()+3600,'/');
    setcookie("check", "only php folder",time()+3600,'./php/');
    setcookie('check', "only php folder",time()-100,'./php/');
    /*
     쿠키(cookie)?
       - 사용자 사용 중인 데이터를 웹 브라우저에 저장을 할 때 사용
       - 해당 서비스에 재접속을 했을 때 저장하고 있는 데이터를 제공을 할 때 사용
    setcookie() : 쿠키 생성 함수
     - setcookie() 구조 : setcookie(쿠키명,쿠키값, 쿠키 폐기 시간, 경로)
     - chrome에서 쿠키 값 확인 : 개발자 도구 -> Applications -> Storage -> Cookies
    쿠키 삭제 방법
     - setcookie(삭제하려는 쿠키명, 쿠키값, time()-100);
    */
?>
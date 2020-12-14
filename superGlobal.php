<?php
    echo 'DOCUMENT_ROOT is '.$_SERVER['DOCUMENT_ROOT'].'<br>';
    //현재 실행 중인 파일 경로 및 해당 파일이 위치한 모든 경로 출력
    echo 'HTTP_ACCEPT_LANGUAGE is '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
    //브라우저에 지원되는 언어
    echo 'HTTP_HOST is '.$_SERVER['HTTP_HOST'].'<br>';
    //현재 호스트 출력
    echo 'SERVER_PORT is '.$_SERVER['SERVER_PORT'].'<br>';
    //현재 홈페이지가 운영되는 웹포트
    echo 'SCRIPT_NAME is '.$_SERVER['SCRIPT_NAME'].'<br>';
    //현재 실행되는 스크립트의 절대 주소
    echo 'REQUEST_URI is '.$_SERVER['REQUEST_URI'].'<br>';
    //요청한 URI 정보
    echo 'PHP_SELF is '.$_SERVER['PHP_SELF'].'<br>';
    //현재 실행중인 파일의 경로와 파일명 표시
    echo 'QUERY_STRING is '.$_SERVER['QUERY_STRING'];
    //현재 페이지의 쿼리 스트링 정보
?>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $userpw = $_POST['userpw'];
    $useremail = $_POST['useremail'];
    $userbirthday = $_POST['birthyear'].$_POST['birthmonth'].$_POST['birthday'];
    $usergender = $_POST['usergender'];

    $sql = "INSERT INTO member (userid, name, password,";
    $sql .= "email, birthday, gender, reg_date)";
    $sql .= " VALUES ('{$userid}', '{$username}', '{$userpw}',";
    $sql .= "'{$useremail}', '{$userbirthday}', '{$usergender}', NOW())";

    $result = $dbConnect -> query($sql);

    if($result){
        $sql = "SELECT userid, name FROM member";
        $result = $dbConnect -> query($sql);

        $dataCount = $result -> num_rows;

        for($i = 0; $i < $dataCount; $i++){
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            echo "아이디 : ".$memberInfo['userid'];
            echo "<br>";
            echo "이름 : ".$memberInfo['name'];
            echo "<hr>";
        }
    }else{
        echo "입력 실패";
    }
?>
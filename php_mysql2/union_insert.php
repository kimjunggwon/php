<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql2/connectdb2.php';

    $member1List = array();
    $member1List[0] = ['test1', 'test1@test.com'];
    $member1List[1] = ['test2', 'test2@test.com'];
    $member1List[2] = ['test3', 'test3@test.com'];
    $member1List[3] = ['test4', 'test4@test.com'];
    $member1List[4] = ['test5', 'test5@test.com'];
    $member1List[5] = ['test6', 'test6@test.com'];

    $member2List = array();
    $member2List[0] = ['test7', 'test7@test.com'];
    $member2List[1] = ['test8', 'test8@test.com'];
    $member2List[3] = ['test9', 'test9@test.com'];

    $inputList = array();
    $inputList['member1'] = $member1List;
    $inputList['member2'] = $member2List;

    $cnt = 0;

    foreach($inputList as $key => $il){
        foreach($il as $i){
            $sql = "INSERT INTO {$key}(name, email) VALUES ('{$i[0]}', '{$i[1]}')";
            $result = $dbConnect -> query($sql);
            $cnt++;

            if($result){
                echo $cnt." 데이터 입력 성공";
            }else{
                echo $cnt." 데이터 입력 실패";
            }
            echo "<br>";
        }
    }


?>
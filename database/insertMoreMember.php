<?
    include $_SERVER['DOCUMENT_ROOT'].'/database/connectDB.php';

    $sql = "INSERT INTO mymember(";
    $sql .= "userid, name, password,";
    $sql .= "phone, email, birthDay, gender, regTime) VALUES";

    $member = array();
    //쿼리문이 들어갈 배열 선언

    $member[0]  = "('test1', 'test1','test1','010-1234-5678',";
    $member[0] .= "'test1@test.com','1900-01-01', 'm', now());";

    $member[1]  = "('test2', 'test2','test2','010-1234-5678',";
    $member[1] .= "'test2@test.com','1900-01-01', 'm', now());";

    $member[2]  = "('test3', 'test3','test3','010-1234-5678',";
    $member[2] .= "'test3@test.com','1900-01-01', 'm', now());";

    foreach($member as $m){
        $query = $sql.$m;
        //가장 앞에 선언한 sql문과 member 배열에 들어간 쿼리문이랑 연결

        $res = $dbConnect -> query($query);

        if($res){
            echo "데이터 입력 성공<br>";
        }else{
            echo "데이터 입력 실패<br>";
        }
    }
?>
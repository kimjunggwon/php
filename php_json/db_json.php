<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "SELECT * FROM member";
    $result = $dbConnect -> query($sql);

    $dataCount = $result -> num_rows;

    $memberlist = array();

    for($i = 0; $i < $dataCount; $i++){
        $memberinfo = $result -> fetch_array(MYSQLI_ASSOC);
        array_push($memberlist, $memberinfo);
    }

    echo json_encode(
        array(
            'data' => $memberlist,
        )
    )
?>
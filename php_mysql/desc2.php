<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php_mysql/connectdb2.php';

    $sql = "DESC member";
    $res = $dbConnect -> query($sql);

    while($list = $res -> fetch_array(MYSQLI_ASSOC)){
        echo 'Field : '.$list['Field'];
        echo "<br>";
        echo 'Type : '.$list['Type'];
        echo "<br>";
        echo 'Null : '.$list['Null'];
        echo "<br>";
        echo 'Key : '.$list['Key'];
        echo "<br>";
        echo 'Default : '.$list['Default'];
        echo "<br>";
        echo 'Extra : '.$list['Extra'];

        echo "<br>";
        echo "<br>";
    }
?>
<?php
    $fileName = 'test2.txt';

    if(file_exists($fileName)){
        $fopen = fopen($fileName, 'r');

        $readByte = 512;

        if($fopen){
            while($fgets = fgets($fopen, $readByte)){
                echo $fgets."<br>";
            }
        }
    }
?>
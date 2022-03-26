<?php
for($i = 0; $i < 3; $i++){
	echo "바깥쪽 for문 횟수 : {$i}<br>";

	for($n = 0; $n < 3; $n++){
		echo "안쪽 for문 횟수 : {$n}<br>";
    }
    
    echo "<br>";
}
?>
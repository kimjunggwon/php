<meta charset="utf-8">
<?php
    $arr = range(1,1000);
    echo "가장 큰 수 : ".max($arr);
    //max() : 범위 내에 가장 큰 수를 찾는 함수
    echo '<br>';

    $arr = array(5,3,100,749,9383);
    echo "작은 수 : ".min($arr);
    //min() : 범위 내에 가장 작은 수를 찾는 함수
?>
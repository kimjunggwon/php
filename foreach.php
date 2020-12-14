<meta charset="utf-8">
<?php
        $memberlist = array('미우','유나', '민후', '해윤');

        foreach($memberlist as $ml){
            echo $ml;
            echo "<br>";
        }

        /*
        foreach구조
         foreach(배열의 변수 as 배열의 값을 대입할 변수){
            배열의 값을 대입할 변수 사용
         }
        */

        $memberlist2[0] = array("name" => "미우", "id" => 'miu');
        $memberlist2[1] = array("name" => "유나", "id" => 'yuna');
        $memberlist2[2] = array("name" => "민후", "id" => 'minhoo');
        $memberlist2[3] = array("name" => "해윤", "id" => 'haeyun');

        foreach($memberlist2 as $ml){
            echo "이름 : ".$ml['name'];
            echo "<br>";
            echo "아이디 : ".$ml['id'];
            echo "<br><br>";
        }
        //foreach를 통해 index로 값을 가져올 수 있음

        $memberlist3 = array("name" => "미우", "id" => "miu");
        foreach($memberlist3 as $index => $value){
            echo "인덱스 {$index}의 값 : {$value}";
            echo "<br>";
        }
        //foreach로 index의 값과 value의 값을 따로 가져올 수 있음

        $memberlist4[0] = array("name" => "미우", "id" => 'miu');
        $memberlist4[1] = array("name" => "유나", "id" => 'yuna');
        $memberlist4[2] = array("name" => "민후", "id" => 'minhoo');
        $memberlist4[3] = array("name" => "해윤", "id" => 'haeyun');

        foreach($memberlist4 as $index => $value){ //첫번째 배열값 접근 0, 1, 2, 3
            foreach($value as $index2 => $value2){ //데이터가 있는 배열의 접근
                if($index2 == 'name'){
                    echo "{$value2}님의 아이디는 : ";
                }
                if($index2 == 'id'){
                    echo "{$value2}입니다.";
                }
            }
            echo "<br><br>";
        }
?>
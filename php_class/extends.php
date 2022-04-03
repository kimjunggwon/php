<?php
    class a{
        function hello(){
            echo 'test';
        }
    }

    class b extends a{}

    $b = new b;
    $b -> hello();
?>
<?php
    class a{
        protected function hello(){
            echo 'test';
        }

        public function print(){
            $this -> hello();
        }
    }

    $a = new a;
    $a -> print();
?>
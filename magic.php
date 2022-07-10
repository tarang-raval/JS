<?php
           class M{
                 
            private $a=[];
                function __set($name,$value){
                    $this->a[$name]=$value;
                }
                function get($n){
                    echo $this->a[$n];
                }
           }

           $m=new M();
           $m->b=60;

?>
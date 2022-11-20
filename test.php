<?php

class MyClass {
  use Traiter;

function test1(){
   echo self::class;
}
  

}

trait Traiter {
   
function test2(){
   echo self::class;
}
}


$obj = new MyClass();

$obj->test1();
$obj->test2();



<?php

class Dog
{
        public $name = "ポメラニアン";

        public function bark(){
            return "ハナちゃん";
        }

} 

$dog = new Dog();
echo $dog->name."といえば";
echo $dog->bark();

?>
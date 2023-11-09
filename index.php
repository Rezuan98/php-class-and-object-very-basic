<?php
class teacher{
    public $name,$age,$dept;

    function display(){
        echo $this->name;
        echo $this->age;
        echo $this->dept;
    }

    function setinfo($n,$a,$d){
         $this->name = $n;
         $this->age = $a;
        $this->dept = $d;    }
}
$teacher1 = new teacher();

// assigning value

$teacher1->setinfo("Rezuan Ahmmed--",27,"ICE");

$teacher1->display();
?>
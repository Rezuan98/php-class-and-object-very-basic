

 <?php
// class person{
//     public $name,$age,$dept;

//     function __construct($n,$a,$d){
//        $this->name = $n;
//        $this->age = $a;
//        $this->dept = $d;

//     }
//     function display(){
//         echo "Name:".$this->name ."<br>";
//         echo "Age:".$this->age ."<br>";
//         echo "Dept:".$this->dept ."<br>";

//     }
// } 
// initializing object and constructor recieving value from constructor automatically
// two types constructor 1)with parametere 2)without parameter
// $p1 = new person("Rezuan ahmmed",26,"ICE");
// $p1->display();


// $p2 = new person("Sharif Mezba",25,"ICE");
// $p2->display();



// destructor
// class person{

//     function __construct(){
//         echo "constructor is calling automatically"."<br>";

//     }

//     function __destruct(){
//         echo "destructor used in end of a work";
//     }

//     function MSG(){
//         echo "i will run before destructor"."<br>";
//     }


// }
// $p1 = new person();

// $p1->MSG();

// class father{
//     public $jomi,$taka;
//     function FMSG(){
//         echo "Amar Sompotti tumi pabe";
//     }
// }
// class child extends father{
//     //   
//     public $age;

//     // inheritence using constructor
//     function __construct($j,$t,$a){

//         $this->jomi =$j;
//         $this->taka =$t;
//         $this->age =$a;

//     }

//     function display(){

//         echo "Jomi =".$this->jomi;
//         echo "Taka =".$this->taka;
//         echo "Age =".$this->age;

//     }
// // inheritence:here we are accessing all elements of father class from child class.and also from child object we accessing the fathers function
// }
// $obj = new child("2 bigha",2000000,255);
// // $obj->jomi = "2 bigha";
// // $obj->taka = 2000000;
// // $obj->age = 37;

// $obj->display();

// $obj->FMSG();




// multiple inheritence /////


// class cat{
//     function mew(){
//         echo "mew mew";
//     }
// }
// class rat extends cat{
//     function pew(){
//         echo "pew pew";
//     }
// }
// class dog extends rat{
//     function gheu(){
//         echo "gheu ghew";
//     }
// }
// $dog = new dog();

// $dog->mew();
// $dog->pew();
// $dog->gheu();

// accessing private function in a class
// class person{
//     public $name;
//     private $age;
   
//    public function test(){
//        $this->msg();
//    }
//     private function msg(){
//           echo "this is private function";
//     }
//     function display(){
//         echo "calling";
//         echo $this->name;
//         echo $this->age;

//     }
// }
// $obj = new person();
// $obj->test();

// accessing protected variable in a class
// 

// abstrack

// abstract class teacher{
//     abstract function msg();

// }
// class std extends teacher{
//     function msg(){
//         echo "teacher is calling";
//     }
// }
// $st = new std();
// $st->msg();
// another abstract 

abstract class calc{
                     abstract function multi($num1,$num2);
}
class newcalc extends calc {
    function multi($n1,$n2){
        echo $n1*$n2;
    }
}
$newcalc = new newcalc();
$newcalc->multi(20,30);







 ?> 
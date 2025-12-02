<?php

class A{
    public static $name=" men Said man ";  
    public static $yosh=" 15 yosh man  ";
    public static function get(){
        return static::$name;
    }
}
class B extends A{
    public static $name="Elbek  man ";
    public static $yosh= "15 yosh da man ";  
}

   echo A::$name  ;  
   echo A::$yosh. "<br>";
   echo B::get() ;
   echo B::$yosh. "<br>";

//static property va methodlar

// class Person{
// public static $id=0;
// // public $user_id;
// // public $name;
// const PI=3.14;
// public function getPi(){
//     return self::PI;
// }
// public function __construct()
// {
//      echo self::$id+=1;
// }


// }



// echo Person::PI;


?>


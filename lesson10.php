<?php
   class Person{
    public $name;
    public $yosh; 
    public function __construct(){
        $this->name="saidjon ";
        $this->yosh="14 yosh ";
    }
    public function __destruct(){
        echo "Dastur tugadi";
    }
   }
   $john=new Person();
 echo $john->name. "<br>";
 echo $john->yosh. "<br>";

?>
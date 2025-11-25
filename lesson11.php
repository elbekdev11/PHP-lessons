<?php

class Person{
    protected $name;
    protected $yoshi;
    protected $data;
    protected $pass; 

}
class Ota extends Person {
    protected $soch_rangi="Qora";
    public function __construct(){
        $this->name="Saidjon";
        $this->yoshi="15";
        $this->data="15-dekabr";
    } 
}

class Saidjon extends Ota{
    public $harakteri="aqilli";
    public function getharakter(){
 return $this->harakteri;
    }
       
       public function get_name(){
         return $this->name;
       }
}  
class Alisher extends Ota{
     public $sinifi="8-sinf";
       public function getsinif(){
      return $this->sinifi;
       }
      
       public function getname(){
        
         return $this->name;
       }
}  
$Saidjon = new Saidjon();
$Alisher = new Alisher();
echo $Saidjon->get_name(). "<br>";
echo $Saidjon->getharakter(). "<br";


?>
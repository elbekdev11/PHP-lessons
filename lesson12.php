<?php

class Hayvon{
public function sound(){
    return "ovoz";
}
}
class cat extends Hayvon{
    public function sound(){
        return "Miauv";
    }
}
class Dog extends Hayvon{
       public function sound(){
        return "Vov";
    }
}
class sechchi extends Hayvon {
     public function sound(){
        return " saidjon Mouuu didi";
    }
}

$sechchi = new sechchi;
echo $sechchi->sound();
echo "<br>";
$cat=  new cat;
echo $cat->sound();
echo "<br>";
$dog =  new dog;
echo $dog->sound();
echo "<br>";
?>
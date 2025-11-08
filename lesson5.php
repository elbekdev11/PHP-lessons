<?php
$n=[2,543,698,2,-657,13,1];
  $k=max($n);
echo "<br>" . $k;
    $s=min($n);
    echo "<br>" . $s ;
    $d=array_reverse($n);
    echo "<br>" ."<br>" ;
    foreach($d as $value){
        echo $value . "<br>" ;
    }
    echo "<br>";
     echo array_sum($n) . "<br>";
     echo "<br>";
      $c=array_unique($n) ;
      foreach($c as $value){
        echo $value . "<br>" ;
      }
     echo "<br>";
      $meva=["olma", "anor", "banan","qulupnay"];
      foreach($meva as $value){
        echo $value ."<br>" ;
      }
     echo "<br>";
   $talabalar=[
    ["ism"=>"Ali", "yosh"=>"21"],
    ["ism"=>"Jasur", "yosh"=>"19"],
     ["ism"=>"Laylo", "yosh"=>"20"]
   ];
   foreach($talabalar as $value){
      echo $value["ism"]. "<br>";
   }
 
?>
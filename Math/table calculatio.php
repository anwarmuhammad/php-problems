<?php

$array =array(array(1,2),array(3,4),array(5,6));

$total=0; 
for($i=0;$i<3; $i++){
$sum =0;
     for($j=0; $j<2; $j++){
 

       echo $array[$i][$j];
       $sum =$sum+$array[$i][$j];
     
 
        
     }
     echo $sum;
       echo "<hr>";
}

?>
<?php


$friends= array("ahmed"=>"100","mohamed"=>"200","sayed"=>"100","eman"=>"70");
foreach( $friends as $key => $value){
     array_sum($friends)  ;
     if ($value > 100) {
         echo " the ones who owe more than 100 MAD are : <br>" . $key . " : " . $value . "<br>";
     }
}
echo  "the total is " , array_sum($friends) , " MAD ";



?>
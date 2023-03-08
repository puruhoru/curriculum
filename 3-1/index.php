<?php
$x =3;
$y =5;

$i = 1;

while($i < 101){
   if($i == $x && $i == $y){
    echo "<br>";
    echo "FizzBuzz!!";

    $i ++ ;
    $x += 3;
    $y += 5;
   }elseif($i == $x ){
        echo "<br>";
        echo "Fizz!";
        $x += 3;
        $i ++;
    }elseif($i == $y){
        echo "<br>";
        echo "Buzz!";
        $y += 5;
        $i ++;
    }else{
    echo"<br>";
    echo $i;
    $i ++;  
    }

}


?>
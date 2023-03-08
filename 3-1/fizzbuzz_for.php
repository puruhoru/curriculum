<?php
for ($i = 1; $i <= 100; $i++){
     if ($i % 3 === 0 && $i % 5 === 0){  // 3の倍数かつ5の倍数のとき
         echo 'FizzBuzz!!';
     }else if ($i % 3 === 0){  // 3の倍数のとき
         echo 'Fizz!';
     }else if ($i % 5 === 0){  // 5の倍数のとき
         echo 'Buzz!';     // 埋めてみましょう
     }else{  // それ以外
         echo $i;     // 埋めてみましょう
     }
     echo '<br>';
 }
 ?>
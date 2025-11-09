<?php

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

echo "</br>";


$FizzBuzz = "FizzBuzz";
$Fizz = "Fizz";
$Buzz = "Buzz";

for ($a = 1; $a <= 50; $a++){
  if($a % 15 == 0) {
    echo "$FizzBuzz" . "</br>";
  }
    elseif($a % 3 == 0){
    echo "$Fizz" . "</br>";
    }
    elseif($a % 5 == 0){
        echo "$Buzz" . "</br>";
    }
    else{
        echo $a . "</br>";
    }
}

echo "</br>";




$count = 0;

while ($count <= 100) {
  if ($count == 20) {
    break;
  }
  if ($count % 3 == 0){
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count ++;
}


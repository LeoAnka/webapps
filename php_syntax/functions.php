<?php

function greet($text){
  echo "hello my dear ", $text;

}

greet("Friend");


function saludo($text){
  return "hello my dear ".$text;

}

echo saludo("Pepe")." how are you?";


function triple(&$num){  // adding a & means the argument is the ACTUAL varialbe,
  // in this case $x, that´s why we echo $x at the end and it´s value will be 30
  $num = $num * 3;

}

$x = 10;
triple($x);
echo $x;



?>

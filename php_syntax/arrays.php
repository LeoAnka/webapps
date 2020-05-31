<?php

$myArray = array(1 , 5, 10);
print_r($myArray);
echo($myArray[2]);

echo("n");


$myDic = array("animal" => "perro", "persona" => "maria");
print_r($myDic);

echo($myDic["persona"]);


//appending items
$myArray1 = array();
$myArray1[] = 1; //this will append number 1 to the array
$myArray1[] = 2;

print_r($myArray1);

//appending to dictionary
$myDic["cosa"] = "coche";
print_r($myDic);


//foreach loop
foreach($myArray as $k => $v){
  echo $k, ":", $v, "n";
}

//for loop
for ($i = 0; $i < 8; $i++){
  echo "iteration number: ", $i, "n";
}

?>

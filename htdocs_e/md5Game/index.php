<!DOCTYPE html>

<html>
<head>
<title>MD5 crack game - Ernes T.R</title>
</head>

<body>


<p>This application reverse an MD5 hash of a four digit number</p>

<pre>

<?php

$result = "not found";
/*
$check = hash("md5", "1234");
echo $check;
*/
//This code will be skipped if there is no Input

if(isset($_GET["md5"])){
  $cyphers = "0123456789";
  $md5 = $_GET["md5"];
  $trys = 10;
  $tryPin = "";
  $tryPinHash = "";
  $numTrys = 0;
  $limit = 5;

  for($a = 0; $a < strlen($cyphers); $a++){
    $cy1 = $cyphers[$a];
    for($b = 0; $b < strlen($cyphers); $b++){
      $cy2 = $cyphers[$b];
      for($c = 0; $c < strlen($cyphers); $c++){
        $cy3 = $cyphers[$c];
        for($d = 0; $d < strlen($cyphers); $d++){
          $cy4 = $cyphers[$d];
          $tryPin = $cy1.$cy2.$cy3.$cy4;
          $tryPinHash = hash("md5", $tryPin);
          $numTrys = $numTrys + 1;
          if ($trys > 0){
            $trys = $trys - 1;
            echo $tryPin, "    ", $tryPinHash, "\n";
          }
          //echo $numTrys, "  ", $limit, "\n";
          /*if($numTrys > $limit){
            echo "break";
            break;
          }*/
          if($md5 == $tryPinHash){
            $result = $tryPin;
            break;
          }
        }
      }
    }
  }
}



?>
</pre>


<form>
<!--
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br>
-->

<input type="text" name="md5" size="60">
<input type="submit" value="Crack MD5"><br>

</form>

<p>Result original 4 digit number: <?php printf($result); ?></p>
 <!-- look in previous php blocks this variable -->
<!--<p>Result MD5 code: <?= htmlentities($result); ?></p>-->

<!--<p><?php echo $md5 ?></p>-->

</body>

</html>

<html>

<body>
  <?php
  $randnum =  rand(0,100);
  //echo $_GET["text"] . " " . $_GET["num"]; //just to test GET values that travel from guesslink.php
  echo $_GET["text"] . " " . $randnum;
   ?>

   <p>
     <a href="guesslink.php">Back</a>
   </p>

</body>

</html>

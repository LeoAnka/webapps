<!DOCTYPE html>

<html>

<head>
  <title> Ernes T.R PHP </title>
</head>

<body>

<h1>Ernes T.R PHP</h1>

<pre>
    EEEEEE
    EE
    EEEEEE
    EE
    EEEEEE
</pre>
<br>
<p>
<?php
$myHash = hash('sha256', 'ERNES');

echo "The SHA256 for my name <b>ERNES</b> is <b>$myHash</b>"
?>
</p>

<p>Click <a href="check.php" target="_blank">here</a> to see the error sttings<br>
Click <a href="fail.php" target="_blank">here</a> to cause a trace back</p>

</body>

</html>

<!DOCTYPE html>

<html>
<head>
<title>MD5 crack game - Ernes T.R</title>
</head>

<body>


<p>This application takes an MD5 hash
of a two-character lower case string and
attempts to hash all two-character combinations
to determine the original two characters.</p>

<pre>

<?php

$result = "not found";
/*
$check = hash("md5", "1234");
echo $check;
*/
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

<p>Result MD5 code: <?php printf($result); ?></p>
 <!-- look in previous php blocks this variable -->
<p>Result MD5 code: <?= htmlentities($result); ?></p>

</body>

</html>

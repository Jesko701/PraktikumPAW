<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w');
fwrite($fh, "ANJAY");
// $theData = fgets($fh);
// $bp = fgets($fh);
fclose($fh);
// echo $theData;
// echo "<br>" . $bp;

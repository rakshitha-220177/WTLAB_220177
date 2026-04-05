<?php
<?php

echo "<h2>PHP File Operation Modes Demo</h2>";

$filename = "modes.txt";

echo "<h3>1. w mode (write - old data delete)</h3>";
$file = fopen($filename, "w");
fwrite($file, "This is written using w mode\n");
fclose($file);
echo nl2br(file_get_contents($filename));


echo "<h3>2. a mode (append - adds at end)</h3>";
$file = fopen($filename, "a");
fwrite($file, "This line is added using a mode\n");
fclose($file);
echo nl2br(file_get_contents($filename));


echo "<h3>3. r mode (read only)</h3>";
$file = fopen($filename, "r");
echo nl2br(fread($file, filesize($filename)));
fclose($file);


echo "<h3>4. r+ mode (read and write)</h3>";
$file = fopen($filename, "r+");
fwrite($file, "Start- ");
fclose($file);
echo nl2br(file_get_contents($filename));


echo "<h3>5. w+ mode (read and write but deletes old data)</h3>";
$file = fopen($filename, "w+");
fwrite($file, "New content us
ing w+ mode\n");
fclose($file);
?>
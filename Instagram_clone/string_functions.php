<?php
$hardcoded="rakshitha induri";
//<h2>basic string functions</h2>
echo "length of string: ".strlen($hardcoded)."<br>";
echo "word count: ".str_word_count($hardcoded)."<br>";
echo "reverse string: ".strrev($hardcoded)."<br>";
//<h2>case conversions</h2>
echo "uppercase:".strtoupper($hardcoded)."<br>";
echo "lowercase:".strtolower($hardcoded)."<br>";
echo "first char uppercase: ".ucfirst($hardcoded)."<br>";
echo "first word uppercase: ".ucwords($hardcoded)."<br>";
//<h2>string searching and replacing</h2>
echo "replace string: ".str_replace("induri","i",$hardcoded)."<br>";
echo "position of a string: ".strpos($hardcoded,"induri")."<br>";
//<h2>substring and trimming</h2>
echo "substring: ".substr($hardcoded,0,8)."<br>";
echo "trim: ".trim($hardcoded)."<br>";
echo "left trim: ".ltrim($hardcoded)."<br>";
echo "right trim: ".rtrim($hardcoded)."<br>";
//<h2>string comparison</h2>
echo "string compare: ".strcmp($hardcoded,"rakshitha induri")."<br>";
echo "string case compare: ".strcasecmp($hardcoded,"rakshitha induri")."<br>";
//<h2>special characters and security</h2>
$special_str=" rakshitha <b>induri</b>! ";
echo "with special characters: ".$special_str."<br>";
echo "htmlspecialchars: ".htmlspecialchars($special_str)."<br>";
echo "addslashes: ".addslashes($special_str)."<br>";
//<h2>other string functions</h2>
echo "string repeat: ".str_repeat($hardcoded,2)."<br>";
echo "string shuffle: ".str_shuffle($hardcoded)."<br>";
?>
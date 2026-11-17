<?php
$part1="coding in";
$part2="php programming";
$fullText=$part1.$part2;
echo "combined text :" .$fullText."<br>";

$upperText=strtoupper($fullText);
echo "Upper text" .$upperText. "<br>;

$length=strlen($uppertext);
echo "Total Characters" .$length. "<br>";

$position=strpos($uppertext,"PHP");
echo "position of 'PHP' ".$position."<br>";

$extractedWord = substr($uppertext, 10, 11);
echo " Extracted Word: " . $extractedWord . "<br>";
?>



<?php
echo substr("Hello world",0,1)."<br>";
$words = explode(" ", "Saurabh Wani");
$acronym = "";

foreach ($words as $w) {
  $acronym .= $w[0];
}
echo $acronym."<br>";
?>
<?php

require "factorial/factorial.php";

require "largestword/largestword.php";

echo "<h2>Factorial</h2>";
$num = 4;


echo "The factorial {$num} is : ". factorial($num);

echo "<br><hr>";

echo "<h2>The larges word</h2>";

$str = "'The quick brown&&!! fox'";

echo "The largest word in {$str} is: ".largestword($str);
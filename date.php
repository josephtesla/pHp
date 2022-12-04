<?php
date_default_timezone_set("Africa/Lagos");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Current Date and Time is " . date("Y-m-d, H:i:sa") . "<br>";
echo "Today is " . date("l, Y-m-d") . "<br>";

$d = strtotime("+2 monday");
echo date("Y-m-d h:i;sa", $d);
?>

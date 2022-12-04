<?php

function get_length($str){
  return strlen($str);
}

$items = array("Orange", "Apple", "Grape", "Mango");
$item_lengths = array_map(function ($item) {
  return strlen($item); 
}, $items);
print_r($item_lengths);


?>

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");

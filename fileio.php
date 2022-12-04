<?php

//echo readfile("sample.txt");
$myfile = fopen("sample.txt", "r") or die("Unable to Open file!");
echo fread($myfile, filesize("sample.txt")) . "<br>"; // read content of length
echo fgets($myfile); // read a single line from a file

while (!feof($myfile)){
  echo fgets($myfile) . "<br>"; // gets line by line
  echo fgetc($myfile); // reads character by character
}

fclose($myfile);

$myfile = fopen("sample.txt", "w") or die("Unable to Open file!");

$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("sample.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);



?>

<?php
$myfile = fopen("sample.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

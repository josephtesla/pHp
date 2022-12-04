<?php

$x = 5;
function get_me()
{
  echo "Value of x inside function is $x"; // expect warning because we are referencing a global variable in a func
  echo "<br>";
  echo "I am here";
}

echo "Value of x outside function is $x";

get_me()

?>

<?php

function get_me2()
{
  $y = 12;
  echo "Value of x inside function is $y";
  echo "<br>";
  echo "I am here";
}

echo "Value of x outside function is $y"; // expect warning because we are referencing a local variable in the global space

get_me2()

?>

<?php
$x = 5;
$y = 10;

function myTest()
{
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

<?php
$x = 5;
$y = 10;

function myTest2()
{
  $GLOBALS['y'] += $GLOBALS['x'];
}

myTest2();
echo $y; // outputs 15
?>

<?php
echo "<br>";
function myTest3()
{
  static $x = 0;
  echo $x;
  $x++;
}

myTest3(); // echos 0
myTest3(); // echos 1
myTest3(); // echos 2
?>



<?php
$services = array(
  'saas' => array('name' => "premier", "cat" => "ERP"),
  "paas" => array('os' => "windows", 'location' => "abuja"),
  'iaas' => array('manager' => "Akinhoco", 'machine' => "Dell-EMC")
);

foreach ($services as $platform_key => $platform_array) {
  echo $platform_key . "--->";
  foreach ($platform_array as $key => $value) {
    echo "<br>";
    echo $key . ' => ' . $value;
  }
}


echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
$y = true ? 5 : 6;


echo strlen("Hello world!"); // outputs 12
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

echo "<br>";
echo PHP_INT_MAX;
echo "<br>";
echo PHP_INT_MIN;
echo "<br>";
echo is_int(445);
echo "<br>";
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_MAX;
echo PHP_FLOAT_DIG; // 15 // The number of decimal digits that can be rounded into a float and back without precision loss
echo PHP_FLOAT_EPSILON;

echo "<br>";
echo is_float(4.5);
echo "<br>";
echo is_double(16.78);
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
echo var_dump(is_finite(1.9e309)); // false since its greater than PHP_FLOAT_MAX

echo var_dump(is_nan(acos(8))); // true

$x = 5985;
var_dump(is_numeric($x)); // true

$x = "5985";
var_dump(is_numeric($x)); // true

$x = "59.85" + 100; // true
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x)); // true

class Car {
  public $name;
  public $model;

  public function __construct($name, $model)
  {
    $this->name = $name;
    $this->model = $model; 
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getDetails(){
    return "Car name is " . $this->name . " and model is " . $this->model;
  }
}

$my_car = new Car("Benz", "AMG");
echo "<br>";
echo $my_car->getDetails();
?>

<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

echo pi();

echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

echo(abs(-6.7));  // returns 6.7
echo (sqrt(81));

echo(round(0.60));  // returns 1 The round() function rounds a floating-point number to its nearest integer:

echo(round(0.49));  // returns 0

// The rand() function generates a random number:
echo "<br>";
echo (rand(12, 14));

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);

echo cars[0];

if ($my_car->name === "Benz"){
  echo "Correct Name";
} else {
  echo "Incorrect Naming!";
}

$t = date("H");
if ($t < "20") {
  echo "$t Have a good day!";
  echo "<br>";
} elseif ($t < "17") {
  echo "$t Still Have a nice day";
}

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
  $x++;
}

for ($x = 0; $x <= 100; $x += 10){
  echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value){
  echo "color: $value <br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x => $val){
  echo "$x = $val <br>";
}

$st = "mystring";
echo "$st[5] <br>";

function writeMsg() {
  echo "Hello world! <br>";
}

writeMsG(); // call the function



// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10



?>

<?php
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num . "<br>";

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
rsort($cars);
var_dump($cars);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); // sorts associative array by value
ksort($age); // sorts associative array by key
arsort($age); // sorts associative array by value - descending
krsort($age); // sorts associative array by key - descending
var_dump($age);
echo count($cars);


?>

<?php

$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo json_encode($age);
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars) . "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

$arr = json_decode($jsonobj, true);
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];

var_dump(json_decode($jsonobj));
var_dump(json_decode($jsonobj, true));

?>

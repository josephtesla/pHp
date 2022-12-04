<?php 

$services = array(
  'saas' => array('name' => "premier", "cat" => "ERP"),
  "paas" => array('os' => "windows", 'location' => "abuja"),
  'iaas' => array('manager' => "Akinhoco", 'machine' => "Dell-EMC")
);

foreach ($services as $platform_key => $platform_array) {
  echo $platform_key . "---> <br>";
  foreach ($platform_array as $key => $value) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $key . ' => ' . $value;
    echo "<br>";

  }
}


?>

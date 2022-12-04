<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $subject = $_GET['subject'];
  $web = $_GET['web'];
  if ($subject && $web) {
    echo "Study " . $subject . " at " . $web;
  }
}

?>


<html>
  <body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>
  </body>
</html>


<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['fname'];
    $name = $_POST['fname'];
    if (empty($name)){
      echo "Name is empty";
    } else {
      echo $name . " is the name!!";
    }
  }
?>

<?php
session_start(); // must be the first thing in the script before the tags
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["username"] = "tesla";
  echo "session variables are set <br>";
  print_r($_SESSION);
  // remove all session variables
session_unset();

// destroy the session
session_destroy();
  ?>
</body>
</html>

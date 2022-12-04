<?php

function divide($dividend, $divisor)
{
  if ($divisor == 0) {
    throw new Exception("Dividing by zero not possible", 23);
  }

  return $dividend / $divisor;
}

try {
  echo divide(50, 0);
} catch (Exception $e) {
  echo "Bitch, I caught the exception! <br>";
  echo "Message: " . $e->getMessage() . "<br>";
  echo "Code: " . $e->getCode() . "<br>";
} finally {
  echo "I will run anyways! <br>";
}

echo "Hello brooo"

?>

<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = clean_input($_POST["name"]);
  $email = clean_input($_POST["email"]);
  $website = clean_input($_POST["website"]);
  $comment = clean_input($_POST["comment"]);

  if (!empty($_POST["gender"])) {
    $gender = clean_input($_POST["gender"]);
  }

  if (!$name) {
    $nameErr = "Name is required!";
  }

  if (!$email) {
    $emailErr = "Email is required!";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailErr = "Invalid Email Format";
  }

  if ($website){
    if (!filter_var($website, FILTER_VALIDATE_URL)){
      $websiteErr = "Invalid Website URL!";
    }
  }

  if (!$gender) {
    $genderErr = "Gender is required!";
  }
}

function clean_input($data)
{
  $data = trim($data);
  $data = stripslashes(($data));
  $data = htmlspecialchars(($data));
  return $data;
}


?>

<html>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br><textarea name="comment" rows="5" cols="40">
     <?php echo $comment; ?>
    </textarea><br>
    Gender:
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <br>

    <input type="submit" />
  </form>

  <h2>Your Input:</h2>
  <p>Name: <?php echo $name; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Website: <?php echo $website; ?></p>
  <p>Gender: <?php echo $gender; ?></p>


</body>

</html>

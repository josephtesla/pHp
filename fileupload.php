<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fileToUpload"])) {
  $fileToUpload = $_FILES["fileToUpload"];
  $fileToUpload_basename = basename($fileToUpload["name"]);

  $target_dir = "uploads/";
  $target_file = $target_dir . $fileToUpload_basename;

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // check if image file is an actual image or fake
  if (isset($_POST["submit"])) {
    $check = getimagesize($fileToUpload["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . "." . "<br>";
      $uploadOk = 1;
    } else {
      echo "File is not an Image" . "<br>";
      $uploadOk = 0;
    }
  }

  // check if exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists." . "<br>";
    $uploadOk = 0;
  }

  // limit file size to 500k
  if ($fileToUpload["size"] > 800000) {
    echo "Sorry, your file is too large" . "<br>";
    $uploadOk = 0;
  }

  // limit file type
  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br>";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded." . "<br>";
  } else {
    if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars($fileToUpload_basename) . " Has been uploaded." . "<br>";
    } else {
      echo "sorry, there was an error uploading uploading the file." . "<br>";
    }
  }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>

  <form action="fileupload.php" enctype="multipart/form-data" method="post">
    Select File to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" />
    <input type="submit" value="Upload Image" name="submit">
  </form>

</body>

</html>

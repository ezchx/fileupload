<?


$B1 = $_POST['B1'];

if ($B1 == "") {echo "Upload file";}

if ($B1 == "Upload") {

  if ($_FILES["file"]["type"] != "") {

    $uploaddir = "files/";
    $xyz = substr(microtime(), 2, 3);
    $tsrc = ($uploaddir . $xyz . ".jpg");

    move_uploaded_file(
    $_FILES["file"]["tmp_name"], $tsrc);

    $size = $_FILES['file']['size'];

    echo "Upload successful. The file size is $size bytes.";

  } else {

    echo "Upload error, please try again.";

  }

}



?>


<html>

<head></head>

<body>

<form method="post" enctype="multipart/form-data" action="#">

  <br>
  <input type="file" name="file" id="file" />
  <input type="submit" name="B1" value="Upload" />

</form>


</body>

</html>

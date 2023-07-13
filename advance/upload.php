<?php 

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// cek jika file adalah gambar atau bukan 
if(isset($_POST["submit"])) {
  $check = getImageSize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . "<hr><hr>";
    var_dump(getImageSize($_FILES["fileToUpload"]["tmp_name"]));
    echo "<hr><hr>";
    var_dump(getImageSize("tes.jpg"));
    $uploadOk = 1;
  } else {
    echo "File is not image.";
    $uploadOk = 0;
  }
}

echo "<br><br>". basename($_FILES["fileToUpload"]["name"]) ."<br><br>";

// cek apakah file sudah ada 
if(file_exists($targetFile)) {
  echo "Sorry file already exists";
  $uploadOk = 0;
}

// hanya file yang kurang dari 500kb yang bisa di-upload 
if($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large";
  $uploadOk = 0;
}

// hanya format file tertentu yang dapat di-upload 
if(!in_array($imageFileType, ["jpg", "gif", "jpeg", "png"])) {
  echo "Sorry, only JPG, JPEG, PNG & GIF are allowed";
  $uploadOk = 0;
}

// apakah $uploadOk di-set 0 karena error
if($uploadOk == 0) {
  echo "Sorry, your file was not uploaded :(";
} else {
  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>

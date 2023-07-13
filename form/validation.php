<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <style>
    * {
      font-family: sans-serif;
    }
    table {
      background: skyblue;
      padding: 10px;
      margin: auto;
      border-radius: 10px; 
    }
    td {
      flex-direction: row;
      align-items: center;
    }
    input {
      border-radius: 200px;
      padding: 5px;
    }
    textarea {
      margin: auto;
      display: block;
      border-radius: 10px;
      padding: 5px;
    }
    input[type="submit"] {
      margin: auto;
      display: block;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>

<?php

$name = $email = $gender = $web = $comment = "";
$nameErr = $emailErr = $genderErr = $webErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and space allowed";
    }
  }

  if(empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if(empty($_POST["web"])) {
    $webErr = "web is required";
  } else {
    $web = input($_POST["web"]);
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web)) {
      $webErr = "Invalid URL";
    }
  }

  if(empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = input($_POST["gender"]);
  }
  $comment = input($_POST["comment"]);
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo $name . "<br>";
echo $email . "<br>";
echo $web . "<br>";
echo $comment . "<br>";
echo $gender . "<br>";

?>


  <form method="POST" action="<?php $_SERVER["PHP_SELF"]?>">
    <table border="0">
      <tr>
        <td>Name</td>
        <td>
          <input type="text" name="name" value="<?php echo $name;?>">
        </td>
        <td><span class="error">* <?php echo $nameErr;?></span></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
          <input type="text" name="email" value="<?php echo $email;?>">
        </td>
        <td><span class="error">* <?php echo $emailErr;?></span></td>
      </tr>
      <tr>
        <td>Website</td>
        <td>
        <input type="text" name="web" value="<?php echo $web;?>">
        </td>
        <td><span class="error">* <?php echo $webErr;?></span></td>
      </tr>
      <tr>
        <td>Gender:</td>
        <td>
          <input type="radio" name="gender" value="female"
            <?php if(isset($gender) && $gender == "female") {
              echo "checked";
            }?>
          > Female
          <input type="radio" name="gender" value="male"
            <?php if(isset($gender) && $gender == "male") {
              echo "checked";
            }?>
        > Male
        </td>
        <td><span class="error">* <?php echo $genderErr;?></span></td>
      </tr>
      <tr>
        <td colspan="3">Comment:</td> 
      </tr>
      <tr>
        <td colspan="3">
          <textarea name="comment" rows="4" cols="30">
            <?php echo $comment;?>
          </textarea>
        </td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit"></td>
      </tr>
    </table>
  </form>
</body>
</html>


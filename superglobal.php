<?php

// superglobal variable adalah variable built-in 
// yang daoat diakses di semua scope

// $GLOBALS
$x = 420;
$y = 69;
function add() {
  $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}
add();
echo $z; // 489 

// $_SERVER 
// menyimpan informasi tentang headers, paths, script locations
echo $_SERVER["PHP_SELF"]; // superglobal.php 
echo $_SERVER["SERVER_NAME"]; // localhost
echo $_SERVER["HTTP_HOST"]; // localhost:8080 
echo $_SERVER["HTTP_USER_AGENT"];
echo $_SERVER["SCRIPT_NAME"]; // superglobal.php 
?>

<?php

// $_REQUEST
// digunakan untuk mengumpulkan data setelah men-submit
// form HTML

?>
<html>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Name : <input type="text" name="fname">
    <input type="submit">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_REQUEST["fname"];
      if(empty($name)) {
        echo "Name is empty";
      } else {
        echo $name;
      }
    }
    ?>
  </form>
</body>
</html>

<?php 
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 4;
    $maximum = 11;
    $name = array("Bulat", "Erdeni");
    if (strlen($username) < $minimum || strlen($username) > $maximum) {
      echo "User Name has to be longer than " . $minimum . " symbols and shorter than " . $maximum;
    };

    if (!in_array($username, $name)) {
      echo "please register";
    } else {
      echo "welcome!";
    };
  };
?>
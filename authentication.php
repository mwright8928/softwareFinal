<?php
  session_start();

  // Get username and passsword contents from json file.
  $users = file_get_contents('./midterm.json');
  //  Convert file contents to array.
  $userArray = json_decode($users, true);
  $accessGranted = -1;
  foreach ($userArray as $userAndPass) {
    echo "Username: " . $userAndPass["user"] . ", Password: " . $userAndPass["pass"] . "<br />";
    if(strcmp($userAndPass["user"], $_POST["username"]) == 0 && strcmp($userAndPass["pass"], $_POST["password"]) == 0)  {
      $accessGranted = 1;
      setcookie("access", $accessGranted);
      $_SESSION["username"]=$_POST["username"];
      echo "Access Granted!" . "<br />";
      header("Location: ./midterm.php");
    }
  }
  if($accessGranted == -1) {
    header("Location: ./login.php");
    setcookie("access", $accessGranted);
  }
?>

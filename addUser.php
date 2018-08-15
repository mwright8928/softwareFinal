<?php
  // Modified from authentication file.
  session_start();

  // Get username and passsword contents from json file.
  $users = file_get_contents('./midterm.json');
  //  Convert file contents to array.
  $userArray = json_decode($users, true);
  $accessGranted = 1;
  foreach ($userArray as $userAndPass) {
    echo "Username: " . $userAndPass["user"] . ", Password: " . $userAndPass["pass"] . "<br />";
    if(strcmp($userAndPass["user"], $_POST["username"]) == 0)  {
      setcookie("usertaken", 1);
      header("Location: ./request.php");
      $accessGranted = -1;
    }
  }
  echo $accessGranted;
  if($accessGranted == 1) {

    // Add user.
    $currentArray["user"] = $_POST["username"];
    $currentArray["pass"] = $_POST["password"];

    echo $currentArray["user"] . $currentArray["pass"];

    //$content = file_get_contents('./midterm.json');
    $tempArray = json_decode($users);
    array_push($tempArray, $currentArray);
    $jsonAdd = json_encode($tempArray);
    echo $jsonAdd;
    file_put_contents('./midterm.json', $jsonAdd);

    setcookie("access", $accessGranted);
    $_SESSION["username"]=$_POST["username"];
    header("Location: ./midterm.php");
  }
?>

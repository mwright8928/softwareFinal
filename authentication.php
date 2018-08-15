<?php
  //  Start sessions.
  session_start();

  //  Variables.
  $server = "localhost";
  $database = "logbook";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $corrUser = 0;
  $corrPass = 0;
  $noPass = 0;

    //  Connect to database.
    $newConn = new mysqli($server, 'root', '', $database);

    //  Check connection.
    if ($newConn->connect_error) {
      die("connection failed: " . $newConn->connect_error);
    } else {
      $conn = $newConn;
    }

    //  Check if usename is in database.
    $mySql = "SELECT username FROM credentials";
    $result = $conn->query($mySql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $strcmpUser = strcmp($row["username"], "$username");
        if ($strcmpUser == 0) {
          $corrUser = 1;
        }
      }
    }

    //  Check if password was submited.
    if (strcmp("$password", '') == 0) {
      echo "No password entered.<br/>";
      $noPass = 1;
    } else {
      //  Check if passwprd is in database.
      $mySql = "SELECT username, password FROM credentials";
      $result = $conn->query($mySql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $strcmpUser = strcmp($row["username"], "$username");
          $strcmpPass = strcmp($row["password"], "$password");
          if ($strcmpPass == 0 && $strcmpUser == 0) {
            $corrPass = 1;
          }
        }
      }
    }


    if ($corrUser == 1 && $noPass == 1) {
      $_SESSION['guest'] = $username;
      echo "You have been granted guest access.<br/>";
      echo "Continue to ";
      echo "<a href='./logbook.php'>Logbook Page</a>";
    } else if ($corrUser == 1 && $corrPass == 1) {
      $_SESSION['user'] = $username;
      echo "Welcome $username, you have been granted user access.<br/>";
      echo "Continue to ";
      echo "<a href='./logbook.php'>Logbook Page</a>";
    } else {
      header("Location: ./login.php");
      setcookie("accessGranted", 0);
    }

?>

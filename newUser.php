<?php
  //  Start sessions.
  session_start();

  //  Variables.
  $server = "localhost";
  $database = "logbook";
  $username = $_POST["newUsername"];
  $password = $_POST["newPassword"];
  $email = $_POST["newEmail"];
  $accessGranted = 1;

    //  Connect to database.
    $newConn = new mysqli($server, 'root', '', $database);

    //  Check connection.
    if ($newConn->connect_error) {
      die("connection failed: " . $newConn->connect_error);
    } else {
      $conn = $newConn;
    }

    //  Check if usename has been used.
    $mySql = "SELECT username FROM credentials";
    $result = $conn->query($mySql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $strcmp = strcmp($row["username"], "$username");
        if ($strcmp == 0) {
          $accessGranted = 0;
        }
      }
    }

    setcookie("accessGranted", $accessGranted);

    //  If username has not been taked enter into table.
    if ($accessGranted != 0) {
      //  Insert new values into credentials table.
      $mySql = "INSERT INTO credentials (id, username, password, email) VALUES ('', '$username', '$password', '$email')";

      //  Verify new entry was created.
      if ($conn->query($mySql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $mySql . "<br>" . $conn->error;
      }
      header("Location: ./login.php");
    } else {
      header("Location: ./register.php");
    }
?>

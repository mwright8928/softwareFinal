<?php
  session_start();
  $server = "localhost";
  $database = "logbook";
  //  Connect to database.
  $newConn = new mysqli($server, 'root', '', $database);

  //  Check connection.
  if ($newConn->connect_error) {
    die("connection failed: " . $newConn->connect_error);
  } else {
    $conn = $newConn;
  }
  $username = $_SESSION['user'];
  $sql = "SELECT id, username, email FROM credentials WHERE username = '$username'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
    }
  }

  if ($_POST["email"] == '') {
    $newPass = $_POST["password"];
    $sql = "UPDATE credentials SET password='$newPass' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Password updated successfully.</br>";
      header("Location: ./user.php");
    } else {
      echo "Error updating password: " . $conn->error;
    }
  } else if ($_POST["password"] == '') {
    $newEmail = $_POST["email"];
    $sql = "UPDATE credentials SET email='$newEmail' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Email updated successfully.</br>";
      header("Location: ./user.php");;
    } else {
      echo "Error updating email: " . $conn->error;
    }
  } else {
    header("Location: ./user.php");
  }
?>

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

  $newText = $_POST["entry"];
  $sql = "INSERT INTO logbookEntries (id, date, time, text) VALUES ('$id', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '$newText')";

  if ($conn->query($sql) === TRUE) {
    echo "New logbook entry created successfully";
    header("Location: ./user.php");
  } else {
    echo "Error updating logbook table: " . $sql . "<br>" . $conn->error;
    header("Location: ./user.php");
  }

?>

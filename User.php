<?php
  require_once "./Guest.php"
  class USER extends Guest {

    function getPasswords() {
      $db = readDB('credentials');
      $result = $conn->query($db);
      echo $result['password']"<br/>";
    }

    function setCredentials($id, $row, $newVal) {
      //  Connect to database.
      $newConn = new mysqli($server, 'root', '', $database);

      //  Check connection.
      if ($newConn->connect_error) {
        die("connection failed: " . $newConn->connect_error);
      } else {
        $conn = $newConn;
      }

      $mySql = "UPDATE credentials SET $row = $newVal WHERE id = $id";
    }
  }
?>

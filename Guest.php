<?php
  class Guest {

    function readDB($tableName, $col){
      //  Variables.
      $server = "localhost";

      //  Connect to database.
      $newConn = new mysqli($server, 'root', '', $database);

      //  Check connection.
      if ($newConn->connect_error) {
        die("connection failed: " . $newConn->connect_error);
      } else {
        $this->connection = $newConn;
      }

      //  Check if usename has been used.
      $mySql = "SELECT $col From $tableName";

      //  Return database connection.
      return $mySql;
    }

    function getCredentials($row, $id) {
      if (strcmp($row, 'password') == 0){
        echo "You do not have access to password infromation!<br/>"
      } else {
        $db = readDB('credentials');
        $result = $conn->query($db);
        echo $result['$id']"<br/>";
      }
    }

    function getLogbooks($row) {
      $db = readDB('logbookEntries');
      $result = $conn->query($db);
      echo $result['$row']"<br/>";
    }
  }
?>

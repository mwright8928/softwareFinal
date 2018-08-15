<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Members Area</title>

    <!-- Meta tags -->
    <meta name='description' content='Home page for software engineering midterm.' />
    <meta name='robots' content='index follow'/>
    <meta http-equiv='author' content='Michael Wright'/>
    <meta http-equiv='pragma' content='no-cache' />
    <!-- Required boostrap meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link to boostrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="midtermStyle.css">
  </head>
  <body>
    <!-- Navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Restricted</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <li><a class="nav-item nav-link" href="./midterm.php">Home <span class="sr-only">(current)</span></a><li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Log in
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./login.php">Log in</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./request.php">Request Access</a>
                </div>
              </li>
            <li><a class="nav-item nav-link active" href="./restricted.php">Members Area</a></li>
          </div>
        </div>
      </nav>

      <h1>Restricted</h1>
      <h2>Congradulations on becoming a member!</h2>
      <p>Here you will find all of the member only content.<br/></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies nulla a nibh
        maximus bibendum. Aenean rutrum imperdiet luctus. In dapibus nisi ac
        rutrum laoreet. Aenean aliquet sapien ornare turpis aliquam volutpat.
        Pellentesque habitant morbi tristique senectus et netus et malesuada
        fames ac turpis egestas. Quisque imperdiet, orci ac pretium bibendum,
         urna eros suscipit mi, ac ornare ligula nisl a nunc. Sed vulputate
         augue et ligula efficitur, nec porttitor tortor ornare. Vivamus et
         ultricies enim. Curabitur vitae libero at sapien ullamcorper
         ullamcorper. Ut ut sapien ac purus vulputate consequat non sed magna.
          Nam sagittis justo auctor auctor malesuada. Suspendisse at mauris
          quis augue tempus hendrerit vel vel nulla. Nulla viverra massa quis
          enim iaculis luctus. Nunc tincidunt mi at sapien varius blandit.
          Proin et efficitur nunc.</p>
      <?php
        if(isset($_SESSION['username'])){
          //echo "<button onclick='logout()' id='myBtn' title='Logout'>Logout</button>";
          echo "<a href='./logout.php' class='btn btn-danger' role='button'>Logout</a>";
        } else {
          header("Location: ./midterm.php");
        }
      ?>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">2018 &copy Copyright:
        <a href="../Project-VI/docs/logbook/mike.php"> Michael Wright</a>
      </div>
    </footer>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>

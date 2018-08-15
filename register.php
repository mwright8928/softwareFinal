<!-- Start sessions on registration page -->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logbook Hosting Website</title>

    <!-- Meta tags -->
    <meta name='description' content='Logbook hosting website login page.' />
    <meta name='robots' content='index follow'/>
    <meta http-equiv='author' content='Michael Wright'/>
    <meta http-equiv='pragma' content='no-cache' />

    <!-- Bootstrap tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 css link -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <!-- Right aligned navbar -->
    <div id="app" class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Logbook Hosting Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
          <ul class="navbar-nav mr-auto"></ul>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Registration form -->
    <div class="row">
      <div class="column" id="outside"></div>
        <div class="column" id="form">
          <fieldset>
            <legend class="legendOne">Register</legend>
            <?php
              if(isset($_COOKIE['accessGranted']) && $_COOKIE['accessGranted'] == 0)  {
                echo "<p>" . "Username has already taken!" . "<br/>" . "Please enter a different username." . "<p>";
              }
              setcookie('accessGranted', 1);
            ?>

            <form class="form-horizontal" action="newUser.php" method='post' id='register'>
              <div class="form-group">
                <label for="userIn">Username:</label>
                <input type="username" class="form-control" id="newUser" name="newUsername" required autofocus>
                <span id='uFeedback'></span>
              </div>
              <div class="form-group">
                <label for="passIn">Password:</label>
                <input type="password" class="form-control" id="newPass" name="newPassword" required autofocus>
                <span id='pFeedback'></span>
              </div>
              <div class="form-group">
                <label for="emailIn">Email:</label>
                <input type="email" class="form-control" id="newMail" name="newEmail"required autofocus>
                <span id='eFeedback'></span>
              </div>
              <button type="submit" class="btn btn-primary" value="create">Create</button>
            </form>
          </fieldset>
        </div>
      <div class="column" id="outside"></div>
    </div>

    <!-- Footer prompts -->
    <footer class="page-footer font-small">
      <div class="text-center pt-3">*Username and pasword must be at least 7 characters!*</div>
      <div class="text-center pt-3">**Email address is required for password recovery!**</div>
    </footer>

    <!-- Event listener script -->
    <script src='./screening.js'></script>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <!-- Closing tags -->
  </body>
</html>

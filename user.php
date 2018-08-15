<!-- Start sessions on logbook page -->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logbook Hosting Website</title>

    <!-- Meta tags -->
    <meta name='description' content='Logbook hosting website logbook page.' />
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
            <li class="nav-item">
              <a class="nav-link" href="./register.php">Register</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="row">
      <div class="col"></div>
        <div class="col-7">
          <div class="col">
            <fieldset>
              <legend class="legendOne">Profile</legend>
              <form class="form-horizontal" action="#" method='post' id='profile'>
                <div class="form-group">
                  <label for="passIn">Password:</label>
                  <input type="password" class="form-control" id="pass" name="password" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary" value="create">Update</button>
                <div class="form-group">
                  <label for="emailIn">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" autofocus>
                </div>
                <button type="submit" class="btn btn-primary" value="create">Update</button>
              </form>
            </fieldset>
            <fieldset>
              <legend class="legendOne">Logbook</legend>
              <form class="form-horizontal" action="#" method='post' id='logbook'>
                <div class="form-group">
                  <label for="textIn">New Entry:</label>
                  <input type="text" class="form-control" id="text" name="entry" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary" value="create">Add</button>
              </form>
            </fieldset>
          </div>
          <div class="col">
            <p>some other text here.</p>
          </div>
        </div>
      <div class="col"></div>
    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <!-- Closing tags -->
  </body>
</html>

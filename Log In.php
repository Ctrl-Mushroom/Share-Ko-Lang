<?php include('Server.php') ?>

<!DOCTYPE html>
<html>

<head>

  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="All Around Design.css">
  <link rel="icon" type="image/icon" href="Icon.png">

</head>

<body>

  <div>
    <img src="Icon.png" class="iconlog">
   
  </div>
  <div class="wordlog"><span class="dots">.</span>Share Ko Lang...</div>
  

  <center>
    
    <div class="header">
      <h3>Log In</h3>
    </div>
   
    <form method="post" action="Log In.php">
    
    <?php include('Errors.php'); ?>
    
    <div class="container">

      <label>Username</label>
      <input type="text" name="username" placeholder=" Enter Your Username">

      <br><br>
      <label>Password</label>
      <input type="password" name="password" placeholder=" Enter Password Here">

      <br><br>
      <button type="submit" class="button" name="login_user">Log In</button>
      <button type="submit" class="button" href="Log In.php">Clear</button>
    </div>
    
    <p><br><br>
      Illegitimate Member? Don't In A Worry... <a href="Register.php">Sign Up Here</a>
    </p>

    </form>

  </center>

</body>

</html>
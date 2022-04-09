<?php include('Server.php') ?>

<!DOCTYPE html>
<html>

<head>
  
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="All Around Design.css">
  <link rel="icon" type="image/icon" href="Icon.png">

</head>

<body>

  <div>
    <img src="Icon.png" class="iconreg">
  </div>
  <div class="wordreg"><span class="dots">.</span>Share Ko Lang...</div>
  
  <center>
    
    <div class="header">
      <h3>Register</h3>
    </div>
  
    <form method="post" action="Register.php">
    
    <?php include('Errors.php'); ?>
    
    <div class="container">

      <label><span class="dots">..............</span>Last Name</label>
      <input type="text" name="lastname" placeholder=" Last Name (Optional)">

      <br><br>
      <label><span class="dots">..............</span>First Name</label>
      <input type="text" name="firstname" placeholder=" First Name (Optional)">

      <br><br>
      <label><span class="dots">...........</span>Birthdate</label>
      <input type="date" name="birthdate" placeholder=" mm/dd/yyyy">

      <br><br>
      <label><span class="dots">..............</span>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" placeholder=" Enter New Username">

      <br><br>
      <label><span class="dots">.....................</span>E-mail</label>
      <input type="email" name="email" value="<?php echo $email; ?>" placeholder=" Enter Valid E-mail">

      <br><br>
      <label><span class="dots">...............</span>Password</label>
      <input type="password" name="password_1" placeholder=" At Least 4 Characters">

      <br><br>
      <label>Confirm Password</label>
      <input type="password" name="password_2" placeholder=" Re-type Your Password">

      <br><br>
      <button type="submit" class="button" name="reg_user">Register</button>
      <button type="submit" class="button" href="register.php">Clear</button>
    </div>
    
    <p><br><br>
      Are You Already A Member In This Club? <a href="Log In.php">Sign In Now</a>
    </p>

  </form>
  
  </center>

</body>

</html>
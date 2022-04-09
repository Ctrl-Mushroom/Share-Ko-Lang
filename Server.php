<?php
session_start();

//variables ni bert
$username = "";
$email    = "";
$errors = array(); 

//connect sa db
$db = mysqli_connect('localhost', 'root', '', 'sharekolang');

//para sa magreregister
if (isset($_POST['reg_user'])) {
  //kukunin lahat ng valid input sa form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //clarification lng to
  if (empty($username)) { array_push($errors, "* * * * * * * * * * * Username Is Needed Darling!!! * * * * * * * * * * *"); }
  if (empty($email)) { array_push($errors, "* * * * * * * * * * * Email Is Required Of Course!!! * * * * * * * * * * *"); }
  if (empty($password_1)) { array_push($errors, "* * * * * * * * * * Password Is Definitely Required!!! * * * * * * * * * *"); }
  if ($password_1 != $password_2) {
	array_push($errors, "* * * * * * * * * * Two Passwords Did Not Match!!! * * * * * * * * * *");
  }

  //checking sa db
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { //pag meron
    if ($user['username'] === $username) {
      array_push($errors, "* * * * * Username Already Choosed, Try Another One... * * * * *");
    }

    if ($user['email'] === $email) {
      array_push($errors, "* * * * * E-mail Is Already Existing, Try A New One!!! * * * * *");
    }
  }

  //malinis ang records
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	//division mo bert
    //$_SESSION['success'] = "You are now logged in";
  	header('location: Index.php');
  }
}

//para sa magla-log in
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "* * * * * * * * * * * * * * * Username is required* * * * * * * * * * * * * * *");
  }
  if (empty($password)) {
    array_push($errors, "* * * * * * * * * * * * * * * Password is required * * * * * * * * * * * * * * *");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      //Shit division bert...
      //$_SESSION['success'] = "You Can Start Chewing Now!!!";
      header('location: Index.php');
    }else {
      array_push($errors, "* * * * Sorry!!! Username Is Incorrect or Check The Password * * * *");
    }
  }
}

?>
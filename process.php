<?php
  session_start();

  // Capture the form data sent by POST
  $username = isset($_POST['username']) ? trim($_POST['username']) : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $token    = isset($_POST['token']) ? $_POST['token'] : '';

  // Username is your name, password is your student ID
  if ($username == 'Malik' && $password == '106195601') {
    $_SESSION['user']  = $username;
    $_SESSION['token'] = $token;   // value from the hidden field
    header('Location: welcome.php');
    exit();
  } else {
    // Login failed: go back to the login page with an error flag
    header('Location: login.php?error=1');
    exit();
  }
?>

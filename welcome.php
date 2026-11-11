<?php
  session_start();

  // Not logged in: send the visitor back to the login page
  if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
  }

  $pageTitle = 'Welcome';
  include 'header.inc';
?>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <p>You are logged in. Your user token is <?php echo htmlspecialchars($_SESSION['token']); ?>.</p>
<?php include 'footer.inc'; ?>

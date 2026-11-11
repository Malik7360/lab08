<?php
  // Task 4: the login page must be .php (not .html) so the server runs the include statements
  $pageTitle = 'Login';
  include 'header.inc';
?>
    <h2>Login</h2>
<?php if (isset($_GET['error'])) { ?>
    <p><strong>Invalid username or password. Please try again.</strong></p>
<?php } ?>
    <form method="post" action="process.php">
      <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
      </p>
      <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
      </p>
      <p>
        <!-- Hidden user token: first initial + student ID -->
        <input type="hidden" name="token" value="M106195601">
        <input type="submit" value="Login">
      </p>
    </form>
<?php include 'footer.inc'; ?>

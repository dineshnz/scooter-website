<?php include 'controllers/authController.php' ?>

<?php 
	error_reporting(0);

  if (isset($_SESSION['passport'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: userProfile.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['passport']);
    header("location: login.php");
  }

  $userLevel = $_SESSION['userLevel'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main1.css">

  <title>Login Page</title>
</head>
<body>
<?php include 'header.php' ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title header">Login</h3>
        <form action="login.php" method="post">
          <?php if (count($errors) > 0): ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
            <li>
              <?php echo $error; ?>
            </li>
            <?php endforeach;?>
          </div>
          <?php endif;?>

          <?php if (isset($_SESSION['msg'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>
          <!-- Display messages -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>
          <div class="form-group">
            <label>Username or Email</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $fullname; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-lg btn-block">Login</button>
          </div>
        </form>
        <p>Don't yet have an account? <a href="signup.php">Sign up</a></p>
        <div style ="font-size: 0.8em; text-align: center;"><a href="forgot_password.php">Forgot Password?</a></div>
      </div>
    </div>
  </div>
</body>
</html>
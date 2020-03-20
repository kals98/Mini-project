<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system for Mini Project</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:60'>
	<style>
	</style>
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
	         <?php echo display_error(); ?>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" name="login_btn" value="Login">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="login.php" method="POST">
        <div class="group">
		  <?php echo display_error(); ?>
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
		<div class="group">
          <label for="email" class="label">Email</label>
          <input id="email" name="email" type="email" class="input">
        </div>
		<div class="group">
          <label for="dob" class="label">DOB</label>
          <input id="dob" class="input" type="date" name="dob" value="<?php echo date('Y-m-d'); ?>" >
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password_1" type="password" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" name="password_2" class="input" >
        </div>
        <div class="group">
          <input type="submit" class="button" name="register_btn" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>
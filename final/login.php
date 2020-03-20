<?php 
	include('functions.php');
		if (isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system for Mini Project</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:60'>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bgimgl">
	<div >
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="container">
				<a href="index.php" class="navbar-brand text-warning font-weight-bold">Travelmeister Tours</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-ite dropdown">
							<div class="dropdown">
							<a href="" class="nav-link  text-white">OFFERS</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="#">Link 3</a>
							</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="aboutus.php" class="nav-link text-white">ABOUT US</a>
						</li>

                        <li class="nav-item">
							<a href="contactus.php" class="nav-link text-white">CONTACT US</a>
						</li>

                        <li class="nav-ite dropdown">
							<div class="dropdown">
							<a href="<?php display_link();?>" class="nav-link text-white"><?php display_name();?></a>
							<?php display_Dropdown();?>
							</div>
						</li>
					</ul>
				</div>

			</div>
		</nav>
	<div class="container text-left text-white hearderset">
		<h1>Welcome User</h1>
		<h2>Sign Up with us </h2>		
		<h4 style="color:black;">Terms & Conditions Apply</h4>
	</div>
	
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
	</div>
	
	
	</body>
	</html>
	
	